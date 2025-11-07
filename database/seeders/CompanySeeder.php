<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'company_id' => 1,
            'name' => 'Test Company Ltd',
            'vat_number' => 'IT12345678901',
            'tax_code' => 'TC12345678',
            'ateco' => '62.01.00',
            'sdi' => 'ABC1234',
            'registered_office' => 'Via Roma 123, 00100 Rome, Italy',
            'operating_office' => 'Via Milano 456, 00100 Rome, Italy',
            'main_email' => 'info@testcompany.it',
            'pec_email' => 'testcompany@pec.it',
            'phone' => '+39 06 1234567',
            'phone_2' => '+39 06 7654321',
            'company_contact_person' => 'Mario Rossi',
            'employer' => 'Giovanni Bianchi',
            'head_of_prevention' => 'Giuseppe Verdi',
            'workers_safety_representative' => 'Luigi Neri',
            'company_doctor' => 'Dr. Andrea Rossi',
            'workplace_safety_risk' => true,
            'subject_to_cpi' => false,
            'rischio_antincendio' => 'Rischio Antincendio',
            'accountant_name' => 'Studio Commercialista Rossi',
            'accountant_phone' => '+39 06 1111111',
            'accountant_email' => 'studio@rossi.it',
            'labor_consultant_name' => 'Consulente del Lavoro Bianchi',
            'labor_consultant_phone' => '+39 06 2222222',
            'labor_consultant_email' => 'consulente@bianchi.it',
            'notes' => 'This is a test company created for development purposes.',
            'send_deadline_notification' => true,
            'freeze_company' => false,
            'contacts' => json_encode([
                'workinsecurity.perugia@yahoo.it',
                'workinsecurity.viterbo@yahoo.it',
            ]),
            'legal_address_street' => 'Via Roma',
            'legal_address_number' => '123',
            'legal_address_postal' => '00100',
            'legal_address_city' => 'Rome',
            'operating_address_street' => 'Via Milano',
            'operating_address_number' => '456',
            'operating_address_postal' => '00100',
            'operating_address_city' => 'Rome',
        ]);
    }
}
