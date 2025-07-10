<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries_languages = [
            ['name' => 'Afghanistan', 'country_key' => 'AF', 'language_name' => 'Pashto', 'language_key' => 'ps'],
            ['name' => 'Afghanistan', 'country_key' => 'AF', 'language_name' => 'Persian', 'language_key' => 'fa'],
            ['name' => 'Albania', 'country_key' => 'AL', 'language_name' => 'Albanian', 'language_key' => 'sq'],
            ['name' => 'Algeria', 'country_key' => 'DZ', 'language_name' => 'Arabic', 'language_key' => 'ar'],
            ['name' => 'Algeria', 'country_key' => 'DZ', 'language_name' => 'Berber', 'language_key' => 'ber'],
            ['name' => 'Andorra', 'country_key' => 'AD', 'language_name' => 'Catalan', 'language_key' => 'ca'],
            ['name' => 'Angola', 'country_key' => 'AO', 'language_name' => 'Portuguese', 'language_key' => 'pt'],
            ['name' => 'Antigua and Barbuda', 'country_key' => 'AG', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Argentina', 'country_key' => 'AR', 'language_name' => 'Spanish', 'language_key' => 'es'],
            ['name' => 'Armenia', 'country_key' => 'AM', 'language_name' => 'Armenian', 'language_key' => 'hy'],
            ['name' => 'Australia', 'country_key' => 'AU', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Austria', 'country_key' => 'AT', 'language_name' => 'German', 'language_key' => 'de'],
            ['name' => 'Azerbaijan', 'country_key' => 'AZ', 'language_name' => 'Azerbaijani', 'language_key' => 'az'],
            ['name' => 'Bahamas', 'country_key' => 'BS', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Bahrain', 'country_key' => 'BH', 'language_name' => 'Arabic', 'language_key' => 'ar'],
            ['name' => 'Bangladesh', 'country_key' => 'BD', 'language_name' => 'Bengali', 'language_key' => 'bn'],
            ['name' => 'Barbados', 'country_key' => 'BB', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Belarus', 'country_key' => 'BY', 'language_name' => 'Belarusian', 'language_key' => 'be'],
            ['name' => 'Belarus', 'country_key' => 'BY', 'language_name' => 'Russian', 'language_key' => 'ru'],
            ['name' => 'Belgium', 'country_key' => 'BE', 'language_name' => 'Dutch', 'language_key' => 'nl'],
            ['name' => 'Belgium', 'country_key' => 'BE', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Belgium', 'country_key' => 'BE', 'language_name' => 'German', 'language_key' => 'de'],
            ['name' => 'Belize', 'country_key' => 'BZ', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Benin', 'country_key' => 'BJ', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Bhutan', 'country_key' => 'BT', 'language_name' => 'Dzongkha', 'language_key' => 'dz'],
            ['name' => 'Bolivia', 'country_key' => 'BO', 'language_name' => 'Spanish', 'language_key' => 'es'],
            ['name' => 'Bolivia', 'country_key' => 'BO', 'language_name' => 'Quechua', 'language_key' => 'qu'],
            ['name' => 'Bolivia', 'country_key' => 'BO', 'language_name' => 'Aymara', 'language_key' => 'ay'],
            ['name' => 'Bosnia and Herzegovina', 'country_key' => 'BA', 'language_name' => 'Bosnian', 'language_key' => 'bs'],
            ['name' => 'Bosnia and Herzegovina', 'country_key' => 'BA', 'language_name' => 'Croatian', 'language_key' => 'hr'],
            ['name' => 'Bosnia and Herzegovina', 'country_key' => 'BA', 'language_name' => 'Serbian', 'language_key' => 'sr'],
            ['name' => 'Botswana', 'country_key' => 'BW', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Botswana', 'country_key' => 'BW', 'language_name' => 'Tswana', 'language_key' => 'tn'],
            ['name' => 'Brazil', 'country_key' => 'BR', 'language_name' => 'Portuguese', 'language_key' => 'pt'],
            ['name' => 'Brunei', 'country_key' => 'BN', 'language_name' => 'Malay', 'language_key' => 'ms'],
            ['name' => 'Bulgaria', 'country_key' => 'BG', 'language_name' => 'Bulgarian', 'language_key' => 'bg'],
            ['name' => 'Burkina Faso', 'country_key' => 'BF', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Burundi', 'country_key' => 'BI', 'language_name' => 'Kirundi', 'language_key' => 'rn'],
            ['name' => 'Burundi', 'country_key' => 'BI', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Burundi', 'country_key' => 'BI', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Cabo Verde', 'country_key' => 'CV', 'language_name' => 'Portuguese', 'language_key' => 'pt'],
            ['name' => 'Cambodia', 'country_key' => 'KH', 'language_name' => 'Khmer', 'language_key' => 'km'],
            ['name' => 'Cameroon', 'country_key' => 'CM', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Cameroon', 'country_key' => 'CM', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Canada', 'country_key' => 'CA', 'language_name' => 'English', 'language_key' => 'en'],
            ['name' => 'Canada', 'country_key' => 'CA', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Central African Republic', 'country_key' => 'CF', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Central African Republic', 'country_key' => 'CF', 'language_name' => 'Sango', 'language_key' => 'sg'],
            ['name' => 'Chad', 'country_key' => 'TD', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Chad', 'country_key' => 'TD', 'language_name' => 'Arabic', 'language_key' => 'ar'],
            ['name' => 'Chile', 'country_key' => 'CL', 'language_name' => 'Spanish', 'language_key' => 'es'],
            ['name' => 'China', 'country_key' => 'CN', 'language_name' => 'Chinese', 'language_key' => 'zh'],
            ['name' => 'Colombia', 'country_key' => 'CO', 'language_name' => 'Spanish', 'language_key' => 'es'],
            ['name' => 'Comoros', 'country_key' => 'KM', 'language_name' => 'Comorian', 'language_key' => 'km'],
            ['name' => 'Comoros', 'country_key' => 'KM', 'language_name' => 'Arabic', 'language_key' => 'ar'],
            ['name' => 'Comoros', 'country_key' => 'KM', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Congo (Congo-Brazzaville)', 'country_key' => 'CG', 'language_name' => 'French', 'language_key' => 'fr'],
            ['name' => 'Costa Rica', 'country_key' => 'CR', 'language_name' => 'Spanish', 'language_key' => 'es'],
            ['name' => 'Croatia', 'country_key' => 'HR', 'language_name' => 'Croatian', 'language_key' => 'hr'],
            ['name' => 'Cuba', 'country_key' => 'CU', 'language_name' => 'Spanish', 'language_key' => 'es'],
            ['name' => 'Cyprus', 'country_key' => 'CY', 'language_name' => 'Greek', 'language_key' => 'el'],
            ['name' => 'Cyprus', 'country_key' => 'CY', 'language_name' => 'Turkish', 'language_key' => 'tr'],
            ['name' => 'Czechia (Czech Republic)', 'country_key' => 'CZ', 'language_name' => 'Czech', 'language_key' => 'cs'],
            ['name' => 'Denmark', 'country_key' => 'DK', 'language_name' => 'Danish', 'language_key' => 'da'],
        ];
        
        
        foreach ($countries_languages as $country) {
            DB::table('Languages')->insert([
                'name' => $country['name'],
                'country_key' => $country['country_key'],
                'language_name' => $country['language_name'],
                'language_key' => $country['language_key'],

            ]);
        } 

    }
}
