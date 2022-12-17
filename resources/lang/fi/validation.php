<?php

declare(strict_types=1);

return [
    'accepted'             => 'Kenttä :attribute tulee hyväksyä.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'Kentän :attribute tulee olla kelvollinen URL-osoite.',
    'after'                => 'Kentän :attribute päiväyksen tulee olla jälkeen :date.',
    'after_or_equal'       => 'Kentän :attribute päiväyksen tulee olla sama ja jälkeen :date',
    'alpha'                => 'Kenttä :attribute voi sisältää vain kirjaimia.',
    'alpha_dash'           => 'Kenttä :attribute voi sisältää vain kirjaimia, numeroita ja viivoja.',
    'alpha_num'            => 'Kenttä :attribute voi sisältää vain kirjaimia ja numeroita.',
    'array'                => 'Kenttä :attribute tulee olla taulukko.',
    'attached'             => 'Tämä :attribute on jo kiinnitetty.',
    'before'               => 'Kentän :attribute päiväyksen tulee olla ennen :date.',
    'before_or_equal'      => 'Kentän :attribute päiväyksen tulee olla sama tai ennen kuin :date.',
    'between'              => [
        'array'   => 'Kentän :attribute tulee sisältää välillä :min - :max arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla :min - :max kilotavua.',
        'numeric' => 'Kentän :attribute tulee olla välillä :min - :max.',
        'string'  => 'Kentän :attribute tulee olla :min - :max merkkiä pitkä.',
    ],
    'boolean'              => 'Kentän :attribute arvon tulee olla tosi tai epätosi.',
    'confirmed'            => 'Kentän :attribute vahvistus ei täsmää.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Kentän :attribute arvo ei ole kelvollinen päivämäärä.',
    'date_equals'          => ':Attribute on oltava sama päivämäärä kuin :date.',
    'date_format'          => 'Kentän :attribute arvo ei vastaa muotoa :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'Kenttien :attribute ja :other tulee olla eriarvoisia.',
    'digits'               => 'Kentän :attribute arvon on oltava :digits numeroa.',
    'digits_between'       => 'Kentän :attribute arvon tulee olla :min - :max numeroa.',
    'dimensions'           => 'Kentän :attribute kuvalla on virheelliset mitat.',
    'distinct'             => 'Kentän :attribute arvo ei ole uniikki.',
    'doesnt_end_with'      => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => 'Kentän :attribute arvo ei ole validi sähköpostiosoite.',
    'ends_with'            => ':Attribute: n on päätyttävä jompaankumpaan seuraavista: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'Kentän :attribute valittu arvo on virheellinen.',
    'file'                 => 'Kentän :attribute arvon tulee olla tiedosto.',
    'filled'               => 'Kenttä :attribute on pakollinen.',
    'gt'                   => [
        'array'   => 'Kentän :attribute tulee sisältää enemmän kuin :value arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla suurempi kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla suurempi kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla pidempi kuin :value merkkiä.',
    ],
    'gte'                  => [
        'array'   => 'Kentän :attribute tulee sisältää :value arvoa tai enemmän.',
        'file'    => 'Tiedoston :attribute tulee olla suurempi tai yhtäsuuri kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla suurempi tai yhtäsuuri kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla pidempi tai yhtä pitkä kuin :value merkkiä.',
    ],
    'image'                => 'Kentän :attribute arvon tulee olla kuva.',
    'in'                   => 'Kentän :attribute arvo on virheellinen.',
    'in_array'             => 'Kentän :attribute arvo ei sisälly kentän :other arvoon.',
    'integer'              => 'Kentän :attribute arvon tulee olla numero.',
    'ip'                   => 'Kentän :attribute arvon tulee olla validi IP-osoite.',
    'ipv4'                 => 'Kentän :attribute arvon tulee olla validi IPv4-osoite.',
    'ipv6'                 => 'Kentän :attribute arvon tulee olla validi IPv6-osoite.',
    'json'                 => 'Kentän :attribute arvon tulee olla validia JSON:ia.',
    'lowercase'            => 'The :attribute must be lowercase.',
    'lt'                   => [
        'array'   => 'Kentän :attribute tulee sisältää vähemmän kuin :value arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla pienempi kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla pienempi kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla lyhyempi kuin :value merkkiä.',
    ],
    'lte'                  => [
        'array'   => 'Kentän :attribute tulee sisältää :value arvoa tai vähemmän.',
        'file'    => 'Tiedoston :attribute tulee olla pienempi tai yhtäsuuri kuin :value kilotavua.',
        'numeric' => 'Kentän :attribute arvo tulee olla pienempi tai yhtäsuuri kuin :value.',
        'string'  => 'Kentän :attribute arvo tulee olla lyhyempi tai yhtä pitkä kuin :value merkkiä.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'Kentän :attribute ei tule sisältää enempää kuin :max arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla enintään :max kilobittiä.',
        'numeric' => 'Kentän arvon :attribute tulee olla enintään :max.',
        'string'  => 'Kentän :attribute arvon tulee olla enintään :max merkkiä pitkä.',
    ],
    'max_digits'           => 'The :attribute must not have more than :max digits.',
    'mimes'                => 'Kentän :attribute arvon tulee olla tiedostotyyppiä: :values.',
    'mimetypes'            => 'Kentän :attribute arvon tulee olla tiedostotyyppiä: :values.',
    'min'                  => [
        'array'   => 'Kentän :attribute tulee sisältää vähintään :min arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla vähintään :min kilobittiä.',
        'numeric' => 'Kentän :attribute arvon tulee olla vähintään :min.',
        'string'  => 'Kentän :attribute arvon tulee olla vähintään :min merkkiä.',
    ],
    'min_digits'           => 'The :attribute must have at least :min digits.',
    'multiple_of'          => ':Attribute: n on oltava :value: n kerrannainen',
    'not_in'               => 'Kentän :attribute arvo on virheellinen.',
    'not_regex'            => 'Kentän :attribute formaatti on virheellinen.',
    'numeric'              => 'Kentän :attribute arvon tulee olla numero.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'Kenttä :attribute vaaditaan.',
    'prohibited'           => ':Attribute-kenttä on kielletty.',
    'prohibited_if'        => ':Attribute-kenttä on kielletty, kun :other on :value.',
    'prohibited_unless'    => ':Attribute-kenttä on kielletty, ellei :other ole kohteessa :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Kentän :attribute arvo on väärää muotoa.',
    'relatable'            => 'Tätä :attribute: ää ei saa yhdistää tähän resurssiin.',
    'required'             => 'Kenttä :attribute vaaditaan.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'Kenttä :attribute vaaditaan kun :other on :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => 'Kenttä :attribute vaaditaan jos :other ei sisälly arvoihin :values.',
    'required_with'        => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_with_all'    => 'Kenttä :attribute vaaditaan kun arvo :values on annettu.',
    'required_without'     => 'Kenttä :attribute vaaditaan kun arvoa :values ei ole annettu.',
    'required_without_all' => 'Kenttä :attribute vaaditaan kun mitään arvoista :values ei ole annettu.',
    'same'                 => 'Kenttien :attribute ja :other on oltava samanarvoiset.',
    'size'                 => [
        'array'   => 'Kentän :attribute tulee sisältää :size arvoa.',
        'file'    => 'Tiedoston :attribute tulee olla kokoa :size kilobittiä.',
        'numeric' => 'Kentän :attribute arvon tulee olla kokoa :size.',
        'string'  => 'Kentän :attribute arvon tulee olla kokoa :size merkkiä.',
    ],
    'starts_with'          => 'Attribuutin :attribute tulee alkaa yhdellä seuraavista: :values',
    'string'               => 'Kentän :attribute arvon tulee olla tekstiä.',
    'timezone'             => 'Kentän :attribute arvon tulee olla validi aikavyöhyketunniste.',
    'unique'               => 'Kentän :attribute arvo ei ole uniikki.',
    'uploaded'             => 'Tiedoston :attribute lataus epäonnistui.',
    'uppercase'            => 'The :attribute must be uppercase.',
    'url'                  => 'Kentän :attribute arvon tulee olla validi URL-osoite.',
    'uuid'                 => ':Attribute tulee olla kelvollinen UUID.',
    'attributes'           => [
        'address'                  => 'address',
        'age'                      => 'age',
        'amount'                   => 'amount',
        'area'                     => 'area',
        'available'                => 'available',
        'birthday'                 => 'birthday',
        'body'                     => 'body',
        'city'                     => 'city',
        'content'                  => 'content',
        'country'                  => 'country',
        'created_at'               => 'created at',
        'creator'                  => 'creator',
        'current_password'         => 'current password',
        'date'                     => 'date',
        'date_of_birth'            => 'date of birth',
        'day'                      => 'day',
        'deleted_at'               => 'deleted at',
        'description'              => 'description',
        'district'                 => 'district',
        'duration'                 => 'duration',
        'email'                    => 'email',
        'excerpt'                  => 'excerpt',
        'filter'                   => 'filter',
        'first_name'               => 'first name',
        'gender'                   => 'gender',
        'group'                    => 'group',
        'hour'                     => 'hour',
        'image'                    => 'image',
        'last_name'                => 'last name',
        'lesson'                   => 'lesson',
        'line_address_1'           => 'line address 1',
        'line_address_2'           => 'line address 2',
        'message'                  => 'message',
        'middle_name'              => 'middle name',
        'minute'                   => 'minute',
        'mobile'                   => 'mobile',
        'month'                    => 'month',
        'name'                     => 'name',
        'national_code'            => 'national code',
        'number'                   => 'number',
        'password'                 => 'password',
        'password_confirmation'    => 'password confirmation',
        'phone'                    => 'phone',
        'photo'                    => 'photo',
        'postal_code'              => 'postal code',
        'price'                    => 'price',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha response field',
        'remember'                 => 'remember',
        'restored_at'              => 'restored at',
        'result_text_under_image'  => 'result text under image',
        'role'                     => 'role',
        'second'                   => 'second',
        'sex'                      => 'sex',
        'short_text'               => 'short text',
        'size'                     => 'size',
        'state'                    => 'state',
        'street'                   => 'street',
        'student'                  => 'student',
        'subject'                  => 'subject',
        'teacher'                  => 'teacher',
        'terms'                    => 'terms',
        'test_description'         => 'test description',
        'test_locale'              => 'test locale',
        'test_name'                => 'test name',
        'text'                     => 'text',
        'time'                     => 'time',
        'title'                    => 'title',
        'updated_at'               => 'updated at',
        'username'                 => 'username',
        'year'                     => 'year',
    ],
];