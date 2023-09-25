<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContractorMaster;
use App\Models\Company;
use App\Models\Branch;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ContractorMaster::create( [
            'id'=>1,
            'Contractor_ID'=>'100200200422',
            'Contractor_Name'=>'701-Aneesh V',
            'Contractor_J_Date'=>'15/06/2017',
            'Contractor_Category'=>'Electrical',
            'Experience'=>NULL,
            'previous_History'=>NULL,
            'reffered_by'=>NULL,
            'Pan_No'=>NULL,
            // 'Account_No'=>0,
            'Bank_Name'=>NULL,
            'IFSC'=>NULL,
            'Ac_H_Name'=>NULL,
            'Address'=>'aneesh v ',
            'City'=>'palakkad',
            // 'Mob_Phone'=>2147483647,
            // 'Fax'=>NULL,
            'EMail'=>'aneesh123@gmail.com',
            // 'Contact_No'=>NULL,
            'Contractor_Status'=>'Approved',
            'Remarks'=>NULL,
            'ledger_name'=>'',
            'Company_ID'=>'',
            'Branch_ID'=>'2',
            'created_at'=>'0000-00-00 00:00:00',
            'updated_at'=>'0000-00-00 00:00:00'
            ] );
                        
            ContractorMaster::create( [
            'id'=>312,
            'Contractor_ID'=>'222',
            'Contractor_Name'=>'Kaladharan R',
            'Contractor_J_Date'=>'2023-03-03',
            'Contractor_Category'=>'Vasthu',
            'Experience'=>NULL,
            'previous_History'=>NULL,
            'reffered_by'=>NULL,
            'Pan_No'=>NULL,
            // 'Account_No'=>6284384589,
            'Bank_Name'=>'Indian Bank',
            'IFSC'=>NULL,
            'Ac_H_Name'=>'Kaladharan R',
            'Address'=>'Vasthu Acharya, Ayyappan KAvu',
            'City'=>'Palakkad',
            // 'Mob_Phone'=>9567804904,
            // 'Fax'=>NULL,
            'EMail'=>'chathamkulamk@gmail.com',
            // 'Contact_No'=>NULL,
            'Contractor_Status'=>'Approved',
            'Remarks'=>'Vasthu Acharya',
            'ledger_name'=>'Kaladharan R-222',
            'Company_ID'=>'8',
            'Branch_ID'=>'3015',
            'created_at'=>'2023-03-03 03:12:15',
            'updated_at'=>'2023-03-03 06:03:44'
            ] );
            Company::create( [
                'Company_ID'=>8,
                'Date'=>'0000-00-00',
                'Company_Name'=>'CHATHAMKULAM WEIGH BRIDGE',
                'Company_Des'=>NULL,
                'created_at'=>'0000-00-00 00:00:00',
                'updated_at'=>'2023-03-31'
                ] );
                
                
                            
                Company::create( [
                'Company_ID'=>18,
                'Date'=>'0000-00-00',
                'Company_Name'=>'CHATHAMKULAM TECHNOLOGIES (AUD',
                'Company_Des'=>'N.H BYPASS ROAD',
                'created_at'=>'0000-00-00 00:00:00',
                'updated_at'=>'2023-03-31'
                ] );
                Branch::create( [
                    'Branch_ID'=>'1009',
                    'Company_ID'=>'8',
                    'BranchName'=>'HO',
                    'Branch Description'=>'HO',
                    'BranchType'=>'',
                    'BranchAddress'=>'Chathamkulam Chambers, NH Bypass',
                    'BTaluk'=>'Palakkad',
                    'BDistrict'=>'Palakkad',
                    'BState'=>'Kerala - 678007',
                    'Country'=>'India',
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'HO'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'1010',
                    'Company_ID'=>'8',
                    'BranchName'=>'Mannarkkad',
                    'Branch Description'=>'Mannarkkad',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'Mannarkkad'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'1011',
                    'Company_ID'=>'8',
                    'BranchName'=>'Palakkad',
                    'Branch Description'=>'Palakkad',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'Palakkad'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'1012',
                    'Company_ID'=>'8',
                    'BranchName'=>'Tirur',
                    'Branch Description'=>'Tirur',
                    'BranchType'=>'',
                    'BranchAddress'=>'676519',
                    'BTaluk'=>'Malapuram',
                    'BDistrict'=>'Malapuram',
                    'BState'=>'Kerala',
                    'Country'=>'India',
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'Tirur'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'2012',
                    'Company_ID'=>'8',
                    'BranchName'=>'TECHNOLOGY FRANCHISE',
                    'Branch Description'=>'TECHNOLOGY FRANCHISE',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'TECHNOLOGY FRANCHISE'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'3012',
                    'Company_ID'=>'8',
                    'BranchName'=>'HO CTIPL-001',
                    'Branch Description'=>'Chathamkulam Technology India Pvt. Ltd.',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'HO CTIPL-001'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'3013',
                    'Company_ID'=>'8',
                    'BranchName'=>'HO CDPPMCA-002',
                    'Branch Description'=>'HO CDPPMCA-002',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'HO CDPPMCA-002'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'3014',
                    'Company_ID'=>'8',
                    'BranchName'=>'FR PKD CPDPL-003',
                    'Branch Description'=>'Chathamkulam Project Digital Platform Ltd',
                    'BranchType'=>'',
                    'BranchAddress'=>'Chathamkulam Chambers, NH Bypass',
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'FR PKD CPDPL-003'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'3015',
                    'Company_ID'=>'8',
                    'BranchName'=>'FR PKD CDPPMCA-004',
                    'Branch Description'=>'Chathamkulam Digital Platform for Project Management Consultancy',
                    'BranchType'=>'CDPPMCA',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'dist/img/ceetee logo.png',
                    'branch_details'=>'FR PKD CDPPMCA-004'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'3016',
                    'Company_ID'=>'8',
                    'BranchName'=>'FR MKD-005',
                    'Branch Description'=>'FR MKD-005',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'FR MKD-005'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'3017',
                    'Company_ID'=>'8',
                    'BranchName'=>'FR MKD CDPPMCA-006',
                    'Branch Description'=>'FR MKD CDPPMCA-006',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'FR MKD CDPPMCA-006'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'3018',
                    'Company_ID'=>'8',
                    'BranchName'=>'CCSPL',
                    'Branch Description'=>'Chathamkulam Consultancy Services Pvt Ltd',
                    'BranchType'=>'',
                    'BranchAddress'=>NULL,
                    'BTaluk'=>NULL,
                    'BDistrict'=>NULL,
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'Chathamkulam Consultancy Services Pvt Ltd'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'6000',
                    'Company_ID'=>'3',
                    'BranchName'=>'Chathamkulam Business School',
                    'Branch Description'=>'Chathamkulam Business School',
                    'BranchType'=>'',
                    'BranchAddress'=>'Chathamkulam Business School',
                    'BTaluk'=>'Palakkad',
                    'BDistrict'=>'Palakkad',
                    'BState'=>'Kerala',
                    'Country'=>'India',
                    'Branch Head'=>'',
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'Chathamkulam Business School'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'7',
                    'Company_ID'=>'8',
                    'BranchName'=>'Pattambi',
                    'Branch Description'=>'Pattambi',
                    'BranchType'=>'',
                    'BranchAddress'=>'T P M Kutty Building',
                    'BTaluk'=>'Pattambi',
                    'BDistrict'=>'Pattambi',
                    'BState'=>'kerala - 679303',
                    'Country'=>'India',
                    'Branch Head'=>'Krishna Kumar M P',
                    // 'Phone'=>2147483647,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'Pattambi'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'7000',
                    'Company_ID'=>'10',
                    'BranchName'=>'LAND',
                    'Branch Description'=>'Chathamkulam Chambers , NH Byepass Road, Chandranagar , Palakkad- 678007',
                    'BranchType'=>'',
                    'BranchAddress'=>'',
                    'BTaluk'=>'',
                    'BDistrict'=>'',
                    'BState'=>NULL,
                    'Country'=>NULL,
                    'Branch Head'=>NULL,
                    // 'Phone'=>0,
                    // 'Fax'=>0,
                    'Email'=>'',
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'Chathamkulam Chambers , NH Byepass Road, Chandranagar , Palakkad- 678007'
                    ] );
                    
                    
                                
                    Branch::create( [
                    'Branch_ID'=>'8',
                    'Company_ID'=>'8',
                    'BranchName'=>'C K Financiers',
                    'Branch Description'=>'C K Financiers',
                    'BranchType'=>'',
                    'BranchAddress'=>'Chathamkulam Chambers',
                    'BTaluk'=>'Palakkad',
                    'BDistrict'=>'Palakkad',
                    'BState'=>'Kerala',
                    'Country'=>'India',
                    'Branch Head'=>'',
                    // 'Phone'=>NULL,
                    // 'Fax'=>NULL,
                    'Email'=>NULL,
                    'Date'=>'2008-04-01',
                    'branch_logo'=>'',
                    'branch_details'=>'C K Financiers'
                    ] );
        
    }
}
