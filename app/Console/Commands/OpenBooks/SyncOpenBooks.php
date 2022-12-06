<?php

namespace App\Console\Commands\OpenBooks;

use App\Models\BookCase;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SyncOpenBooks extends Command
{
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'books:sync';

    /**
     * The console command description.
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @return int
     */
    public function handle()
    {
        $response = Http::post('https://openbookcase.de/api/listarea/83.08995477111446/-200.56640625000003/-38.13455657705413/221.30859375000003');

        foreach ($response->json()['cases'] as $case) {
            BookCase::updateOrCreate(
                [
                    'id' => $case['id'],
                ],
                [
                    'title'       => $case['title'],
                    'lat'         => (float)$case['lat'],
                    'lon'         => (float)$case['lon'],
                    'address'     => $case['address'],
                    'type'        => $case['type'],
                    'open'        => $case['open'],
                    'comment'     => $case['comment'],
                    'contact'     => $case['contact'],
                    'bcz'         => $case['bcz'],
                    'digital'     => $case['digital'] ?? false,
                    'icontype'    => $case['icontype'],
                    'deactivated' => $case['deactivated'],
                    'deactreason' => $case['deactreason'],
                    'entrytype'   => $case['entrytype'],
                    'homepage'    => $case['homepage'],
                ]
            );
        }

        return Command::SUCCESS;
    }
}