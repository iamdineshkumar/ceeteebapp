<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking_Details;
use Illuminate\Database\Seeder;
use App\Models\ContractorMaster;
use App\Models\Company;
use App\Models\Branch;
use App\Models\User;
use App\Models\Contractor_Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ContractorMaster::create( [
        //     'id'=>1,
        //     'Contractor_ID'=>'100200200422',
        //     'Contractor_Name'=>'701-Aneesh V',
        //     'Contractor_J_Date'=>'15/06/2017',
        //     'Contractor_Category'=>'Electrical',
        //     'Experience'=>NULL,
        //     'previous_History'=>NULL,
        //     'reffered_by'=>NULL,
        //     'Pan_No'=>NULL,
        //     // 'Account_No'=>0,
        //     'Bank_Name'=>NULL,
        //     'IFSC'=>NULL,
        //     'Ac_H_Name'=>NULL,
        //     'Address'=>'aneesh v ',
        //     'City'=>'palakkad',
        //     // 'Mob_Phone'=>2147483647,
        //     // 'Fax'=>NULL,
        //     'EMail'=>'aneesh123@gmail.com',
        //     // 'Contact_No'=>NULL,
        //     'Contractor_Status'=>'Approved',
        //     'Remarks'=>NULL,
        //     'ledger_name'=>'',
        //     'Company_ID'=>'',
        //     'Branch_ID'=>'2',
        //     //'created_at'=>'0000-00-00 00:00:00',
        //     //'updated_at'=>'0000-00-00 00:00:00'
        //     ] );
                        
        //     ContractorMaster::create( [
        //     'id'=>312,
        //     'Contractor_ID'=>'222',
        //     'Contractor_Name'=>'Kaladharan R',
        //     'Contractor_J_Date'=>'2023-03-03',
        //     'Contractor_Category'=>'Vasthu',
        //     'Experience'=>NULL,
        //     'previous_History'=>NULL,
        //     'reffered_by'=>NULL,
        //     'Pan_No'=>NULL,
        //     // 'Account_No'=>6284384589,
        //     'Bank_Name'=>'Indian Bank',
        //     'IFSC'=>NULL,
        //     'Ac_H_Name'=>'Kaladharan R',
        //     'Address'=>'Vasthu Acharya, Ayyappan KAvu',
        //     'City'=>'Palakkad',
        //     // 'Mob_Phone'=>9567804904,
        //     // 'Fax'=>NULL,
        //     'EMail'=>'chathamkulamk@gmail.com',
        //     // 'Contact_No'=>NULL,
        //     'Contractor_Status'=>'Approved',
        //     'Remarks'=>'Vasthu Acharya',
        //     'ledger_name'=>'Kaladharan R-222',
        //     'Company_ID'=>'8',
        //     'Branch_ID'=>'3015',
        //     //'created_at'=>'2023-03-03 03:12:15',
        //     //'updated_at'=>'2023-03-03 06:03:44'
        //     ] );
            // Company::create( [
            //     'Company_ID'=>8,
            //    // 'Date'=>'0000-00-00',
            //     'Company_Name'=>'CHATHAMKULAM WEIGH BRIDGE',
            //     'Company_Des'=>NULL,
            //    // 'created_at'=>'0000-00-00 00:00:00',
            //    // 'updated_at'=>'2023-03-31'
            //     ] );
                
                
                            
            //     Company::create( [
            //     'Company_ID'=>18,
            //   //  'Date'=>'0000-00-00',
            //     'Company_Name'=>'CHATHAMKULAM TECHNOLOGIES (AUD',
            //     'Company_Des'=>'N.H BYPASS ROAD',
            //     //'created_at'=>'0000-00-00 00:00:00',
            //     //'updated_at'=>'2023-03-31'
            //     ] );
            //     Branch::create( [
            //         'Branch_ID'=>'1009',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'HO',
            //         'Branch Description'=>'HO',
            //         'BranchType'=>'',
            //         'BranchAddress'=>'Chathamkulam Chambers, NH Bypass',
            //         'BTaluk'=>'Palakkad',
            //         'BDistrict'=>'Palakkad',
            //         'BState'=>'Kerala - 678007',
            //         'Country'=>'India',
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'HO'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'1010',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'Mannarkkad',
            //         'Branch Description'=>'Mannarkkad',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'Mannarkkad'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'1011',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'Palakkad',
            //         'Branch Description'=>'Palakkad',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'Palakkad'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'1012',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'Tirur',
            //         'Branch Description'=>'Tirur',
            //         'BranchType'=>'',
            //         'BranchAddress'=>'676519',
            //         'BTaluk'=>'Malapuram',
            //         'BDistrict'=>'Malapuram',
            //         'BState'=>'Kerala',
            //         'Country'=>'India',
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'Tirur'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'2012',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'TECHNOLOGY FRANCHISE',
            //         'Branch Description'=>'TECHNOLOGY FRANCHISE',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'TECHNOLOGY FRANCHISE'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'3012',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'HO CTIPL-001',
            //         'Branch Description'=>'Chathamkulam Technology India Pvt. Ltd.',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'HO CTIPL-001'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'3013',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'HO CDPPMCA-002',
            //         'Branch Description'=>'HO CDPPMCA-002',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'HO CDPPMCA-002'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'3014',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'FR PKD CPDPL-003',
            //         'Branch Description'=>'Chathamkulam Project Digital Platform Ltd',
            //         'BranchType'=>'',
            //         'BranchAddress'=>'Chathamkulam Chambers, NH Bypass',
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'FR PKD CPDPL-003'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'3015',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'FR PKD CDPPMCA-004',
            //         'Branch Description'=>'Chathamkulam Digital Platform for Project Management Consultancy',
            //         'BranchType'=>'CDPPMCA',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'dist/img/ceetee logo.png',
            //         'branch_details'=>'FR PKD CDPPMCA-004'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'3016',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'FR MKD-005',
            //         'Branch Description'=>'FR MKD-005',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'FR MKD-005'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'3017',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'FR MKD CDPPMCA-006',
            //         'Branch Description'=>'FR MKD CDPPMCA-006',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'FR MKD CDPPMCA-006'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'3018',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'CCSPL',
            //         'Branch Description'=>'Chathamkulam Consultancy Services Pvt Ltd',
            //         'BranchType'=>'',
            //         'BranchAddress'=>NULL,
            //         'BTaluk'=>NULL,
            //         'BDistrict'=>NULL,
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'Chathamkulam Consultancy Services Pvt Ltd'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'6000',
            //         'Company_ID'=>'3',
            //         'BranchName'=>'Chathamkulam Business School',
            //         'Branch Description'=>'Chathamkulam Business School',
            //         'BranchType'=>'',
            //         'BranchAddress'=>'Chathamkulam Business School',
            //         'BTaluk'=>'Palakkad',
            //         'BDistrict'=>'Palakkad',
            //         'BState'=>'Kerala',
            //         'Country'=>'India',
            //         'Branch Head'=>'',
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'Chathamkulam Business School'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'7',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'Pattambi',
            //         'Branch Description'=>'Pattambi',
            //         'BranchType'=>'',
            //         'BranchAddress'=>'T P M Kutty Building',
            //         'BTaluk'=>'Pattambi',
            //         'BDistrict'=>'Pattambi',
            //         'BState'=>'kerala - 679303',
            //         'Country'=>'India',
            //         'Branch Head'=>'Krishna Kumar M P',
            //         // 'Phone'=>2147483647,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'Pattambi'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'7000',
            //         'Company_ID'=>'10',
            //         'BranchName'=>'LAND',
            //         'Branch Description'=>'Chathamkulam Chambers , NH Byepass Road, Chandranagar , Palakkad- 678007',
            //         'BranchType'=>'',
            //         'BranchAddress'=>'',
            //         'BTaluk'=>'',
            //         'BDistrict'=>'',
            //         'BState'=>NULL,
            //         'Country'=>NULL,
            //         'Branch Head'=>NULL,
            //         // 'Phone'=>0,
            //         // 'Fax'=>0,
            //         'Email'=>'',
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'Chathamkulam Chambers , NH Byepass Road, Chandranagar , Palakkad- 678007'
            //         ] );
                    
                    
                                
            //         Branch::create( [
            //         'Branch_ID'=>'8',
            //         'Company_ID'=>'8',
            //         'BranchName'=>'C K Financiers',
            //         'Branch Description'=>'C K Financiers',
            //         'BranchType'=>'',
            //         'BranchAddress'=>'Chathamkulam Chambers',
            //         'BTaluk'=>'Palakkad',
            //         'BDistrict'=>'Palakkad',
            //         'BState'=>'Kerala',
            //         'Country'=>'India',
            //         'Branch Head'=>'',
            //         // 'Phone'=>NULL,
            //         // 'Fax'=>NULL,
            //         'Email'=>NULL,
            //         'Date'=>'2008-04-01',
            //         'branch_logo'=>'',
            //         'branch_details'=>'C K Financiers'
            //         ] );
                    Contractor_Category::create( [
                        'Category_ID'=>'CC001',
                        'Category_Name'=>'Earth Worker',
                        'Print Name'=>'Earth Worker',
                        'Description'=>'Earth Worker'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC002',
                        'Category_Name'=>'Plumbing',
                        'Print Name'=>'Plumbing',
                        'Description'=>'Plumbing'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC003',
                        'Category_Name'=>'Electrical',
                        'Print Name'=>'Electrical',
                        'Description'=>'Electrical'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC004',
                        'Category_Name'=>'Mason',
                        'Print Name'=>'Mason',
                        'Description'=>'Mason'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC005',
                        'Category_Name'=>'Carpenter',
                        'Print Name'=>'Carpenter',
                        'Description'=>'Carpenter'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC006',
                        'Category_Name'=>'Painting',
                        'Print Name'=>'Painting',
                        'Description'=>'Painting'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC007',
                        'Category_Name'=>'Fero Work',
                        'Print Name'=>'Fero Work',
                        'Description'=>'Fero Work'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC008',
                        'Category_Name'=>'Sub-Contractor',
                        'Print Name'=>'Sub-Contractor',
                        'Description'=>'Sub-Contractor'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC009',
                        'Category_Name'=>'Full-Contractor',
                        'Print Name'=>'Full-Contractor',
                        'Description'=>'Full-Contractor'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC010',
                        'Category_Name'=>'JCB Operator',
                        'Print Name'=>'JCB Operator',
                        'Description'=>'JCB Operator'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC011',
                        'Category_Name'=>'Tipper',
                        'Print Name'=>'Tipper',
                        'Description'=>'Tipper'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC012',
                        'Category_Name'=>'Others',
                        'Print Name'=>'Others',
                        'Description'=>'Others'
                        ] );
                                    
                        Contractor_Category::create( [
                        'Category_ID'=>'CC013',
                        'Category_Name'=>'Vasthu',
                        'Print Name'=>'Vasthu',
                        'Description'=>'Vasthu Consultant'
                        ] );
                        User::create( [
                            'User_ID'=>'',
                            'User_Name'=>'RAJANI',
                            'LogIn_Name'=>'RAJANI',
                            'Pwd'=>'fdfdsfdsfs',
                            'User_Role'=>'Marketing Manager',
                            'Template_Id'=>6,
                            'Template_Name'=>NULL,
                            'User_Department'=>'Marketing Department',
                            'company'=>'8',
                            'branch'=>'3015',
                            'status'=>1,
                            'created_at'=>'2023-09-26 11:50:34',
                            'updated_at'=>'2023-09-26 11:50:34'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'114',
                            'User_Name'=>'MURUGADAS',
                            'LogIn_Name'=>'CP-MSP-008',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Resign person',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'115',
                            'User_Name'=>'SASI',
                            'LogIn_Name'=>'CP-MSP-009',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Resign person',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'116',
                            'User_Name'=>'Sudharsan (msp)',
                            'LogIn_Name'=>'CP-MSP-010',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Resign person',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11650',
                            'User_Name'=>'JIJU J',
                            'LogIn_Name'=>'jiju',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Marketting  Department',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11651',
                            'User_Name'=>'VIMAL.M',
                            'LogIn_Name'=>'vimalnadh',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Marketting  Department',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11652',
                            'User_Name'=>'PRASAD K',
                            'LogIn_Name'=>'prasadk',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Marketting  Department',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11654',
                            'User_Name'=>'irfan rafi',
                            'LogIn_Name'=>'irfanrafi',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Marketting  Department',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11655',
                            'User_Name'=>'Greenu.P',
                            'LogIn_Name'=>'greenu',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Accounts Departmenrt',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11656',
                            'User_Name'=>'HARITHA H',
                            'LogIn_Name'=>'GREENHOME',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Project Departmenrt',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>1,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11657',
                            'User_Name'=>'Kishore.V',
                            'LogIn_Name'=>'kishore',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Marketting  Department',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11658',
                            'User_Name'=>'Ragesh v',
                            'LogIn_Name'=>'ragesh',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Project Departmenrt',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11659',
                            'User_Name'=>'SALAHUDIN ALGHAZI',
                            'LogIn_Name'=>'GHAZIPM',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Project Departmenrt',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'11660',
                            'User_Name'=>'vilsy',
                            'LogIn_Name'=>'vilsy',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Accounts Departmenrt',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                                        
                            User::create( [
                            'User_ID'=>'117',
                            'User_Name'=>'NALINI',
                            'LogIn_Name'=>'CP-MTC-011',
                            'Pwd'=>'xxxxxxxxxxxxx',
                            'User_Role'=>'Operator',
                            'Template_Id'=>0,
                            'Template_Name'=>'',
                            'User_Department'=>'Resign person',
                            'company'=>NULL,
                            'branch'=>NULL,
                            'status'=>0,
                            'created_at'=>'0000-00-00 00:00:00',
                            'updated_at'=>'0000-00-00 00:00:00'
                            ] );
                            Booking_Details::create( [
                                'Booking_ID'=>'10059',
                                'Booking_Date'=>'2022-01-25 07:30:00',
                                'Lead_ID'=>'48851',
                                'Customer_ID'=>'100100713089',
                                'BCustomer_Name1'=>'LEENA V',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'W/o.Chandrasekhar.A, 10/73, Abiramam, North Vaniyar Street, Chittur (P.O.), Palakkad-678 101.',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>8848103799,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'rakithram',
                                'FollowupOwner'=>'rakithram',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200031',
                                'Product_Land'=>'',
                                'Product_Villa'=>'LEENA V',
                                'Agreement_Date'=>'2022-01-29',
                                'Reg_Date'=>'2022-02-15',
                                'Invoice_Date'=>'2022-02-25',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'LEENA V',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2022-01-25 07:30:00',
                                'updated_at'=>'2022-04-27 07:30:00',
                                'remarks'=>''
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1007',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'216025',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'MANIKANDAN.V - ID-216025',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'Radhika Nivas, Bank Colony, Andimadam, Kadukkamkunnam (P.O.), Palakkad-678 651.',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>7012765012,
                                'Telephone'=>0,
                                'Customer_Email'=>'manikandan@gmail.com',
                                'Lead_Owner'=>'mehaboo',
                                'FollowupOwner'=>'divyasatheesh',
                                'Booking_Item'=>'Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'PKDCKRV 22 & 23',
                                'Product_Villa'=>'MANIKANDAN',
                                'Agreement_Date'=>'2021-01-19',
                                'Reg_Date'=>'2021-01-19',
                                'Invoice_Date'=>'2021-08-20',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'MANIKANDAN.V - ID-216025',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Rejected',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3015',
                                'Created_By'=>'sa',
                                'created_at'=>'2021-01-03 13:00:00',
                                'updated_at'=>'2021-01-03 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1008',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'215899',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'Mayalakshmi & Rijesh Kumar',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'Reju Bhavan, Thonackadu,Alappuzha',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9947742395,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'karthkkannan',
                                'FollowupOwner'=>'Binoj',
                                'Booking_Item'=>'Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'PKDCTP VILLA 21',
                                'Product_Villa'=>'REJESH KUMAR',
                                'Agreement_Date'=>'2021-01-22',
                                'Reg_Date'=>'2021-02-05',
                                'Invoice_Date'=>'2020-08-20',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Mayalakshmi & Rijesh Kumar - ID-215899',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3015',
                                'Created_By'=>'sa',
                                'created_at'=>'2021-01-06 13:00:00',
                                'updated_at'=>'2021-01-06 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1009',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'216105',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'Prasanth E.P. & Tintu K.S.',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'Ennazhiyil, Palapram, Ponnani, Malappuram',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>919401000000,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'mehaboo',
                                'FollowupOwner'=>'Binoj',
                                'Booking_Item'=>'Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'PKD CTP VILLA 15',
                                'Product_Villa'=>'TINTU PRASANTH',
                                'Agreement_Date'=>'2021-01-22',
                                'Reg_Date'=>'2021-02-10',
                                'Invoice_Date'=>'2021-01-12',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Prasanth E.P. & Tintu K.S. - ID-216105',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3015',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2021-01-11 13:00:00',
                                'updated_at'=>'2021-01-11 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1010',
                                'Booking_Date'=>'2019-01-27 07:30:00',
                                'Lead_ID'=>'41820',
                                'Customer_ID'=>'100100700292',
                                'BCustomer_Name1'=>'Chathamkulam Company Land ',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'agtreshyr',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>8075262806,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'sa',
                                'FollowupOwner'=>'sa',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200014',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2019-01-28',
                                'Reg_Date'=>'2019-01-28',
                                'Invoice_Date'=>'2019-01-28',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Chathamkulam Company Land Accounts',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'santhi',
                                'created_at'=>'2019-01-27 07:30:00',
                                'updated_at'=>'2019-01-27 07:30:00',
                                'remarks'=>'plot sold to projects'
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1011',
                                'Booking_Date'=>'2019-01-27 07:30:00',
                                'Lead_ID'=>'41820',
                                'Customer_ID'=>'100100700292',
                                'BCustomer_Name1'=>'Chathamkulam Company Land ',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'sfvsdg',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>8075262806,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'sa',
                                'FollowupOwner'=>'sa',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200009',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2019-01-28',
                                'Reg_Date'=>'2019-01-28',
                                'Invoice_Date'=>'2019-01-28',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Chathamkulam Company Land Accounts',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'santhi',
                                'created_at'=>'2019-01-27 07:30:00',
                                'updated_at'=>'2019-01-27 07:30:00',
                                'remarks'=>'plot sold to projects'
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1012',
                                'Booking_Date'=>'2019-01-27 07:30:00',
                                'Lead_ID'=>'41821',
                                'Customer_ID'=>'100100700292',
                                'BCustomer_Name1'=>'Chathamkulam Company Land ',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'sfgrghredh',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>7612479569,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'sa',
                                'FollowupOwner'=>'sa',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200023',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2019-01-28',
                                'Reg_Date'=>'2019-01-28',
                                'Invoice_Date'=>'2019-01-28',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Chathamkulam Company Land Accounts',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'santhi',
                                'created_at'=>'2019-01-27 07:30:00',
                                'updated_at'=>'2019-01-27 07:30:00',
                                'remarks'=>'plot sold to project'
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1013',
                                'Booking_Date'=>'2019-01-29 07:30:00',
                                'Lead_ID'=>'41822',
                                'Customer_ID'=>'100100700292',
                                'BCustomer_Name1'=>'Chathamkulam Company Land ',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'chandranagar palakkad',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>7994839964,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'sa',
                                'FollowupOwner'=>'sa',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200023',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2019-01-30',
                                'Reg_Date'=>'2019-01-30',
                                'Invoice_Date'=>'2019-01-30',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Chathamkulam Company Land Accounts',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'sa',
                                'created_at'=>'2019-01-29 07:30:00',
                                'updated_at'=>'2019-01-29 07:30:00',
                                'remarks'=>'Purchase of above mentioned plot No. 10 in CRC'
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1014',
                                'Booking_Date'=>'2019-05-31 07:30:00',
                                'Lead_ID'=>'41823',
                                'Customer_ID'=>'100100713048',
                                'BCustomer_Name1'=>'Chathamkulam Company Land ',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'159A,TYPE 1 QUATERS ,BLOCK 5 ,NEYVELLI,TAMILNADU',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9442373282,
                                'Telephone'=>0,
                                'Customer_Email'=>'enquiry@chathamkulam.com',
                                'Lead_Owner'=>'sa',
                                'FollowupOwner'=>'sa',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200023',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2019-06-01',
                                'Reg_Date'=>'2019-06-01',
                                'Invoice_Date'=>'2019-06-01',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Chathamkulam Company Land Accounts',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'sa',
                                'created_at'=>'2019-05-31 07:30:00',
                                'updated_at'=>'2019-05-31 07:30:00',
                                'remarks'=>'Plot sold to project'
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1015',
                                'Booking_Date'=>'2019-08-12 07:30:00',
                                'Lead_ID'=>'41824',
                                'Customer_ID'=>'100100713049',
                                'BCustomer_Name1'=>'Chathamkulam Company Land ',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'10 Sree Murugan Nivas, Friends Avenue Colony,Puthuppariyaram-1,Palakkad Kerala 678731',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>7845726972,
                                'Telephone'=>0,
                                'Customer_Email'=>'iamshilpasnair@gmail.com',
                                'Lead_Owner'=>'sa',
                                'FollowupOwner'=>'sa',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200031',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2019-08-13',
                                'Reg_Date'=>'2019-08-13',
                                'Invoice_Date'=>'2019-08-13',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Chathamkulam Company Land Accounts',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'sa',
                                'created_at'=>'2019-08-12 07:30:00',
                                'updated_at'=>'2019-08-12 07:30:00',
                                'remarks'=>''
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1016',
                                'Booking_Date'=>'2020-11-16 07:30:00',
                                'Lead_ID'=>'41827',
                                'Customer_ID'=>'100100713052',
                                'BCustomer_Name1'=>'K.M. JOSEPH',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'S/O J.JOHN MICHEAL, POLICE OFFICERS QUARTERS, AR CAMP,THRISSUR',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>8848084216,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'Mr.Girish Nair',
                                'FollowupOwner'=>'Mr.Girish Nair',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200013',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2020-11-05',
                                'Reg_Date'=>'2020-11-05',
                                'Invoice_Date'=>'2020-11-25',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'K.M. JOSEPH',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Cancelled',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2020-11-16 07:30:00',
                                'updated_at'=>'2021-04-20 07:30:00',
                                'remarks'=>''
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1017',
                                'Booking_Date'=>'2020-11-16 07:30:00',
                                'Lead_ID'=>'41826',
                                'Customer_ID'=>'100100713051',
                                'BCustomer_Name1'=>'SARANYA PRABHU',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'Saranya Nivas, Mithunampalam, Kodumbu,PALAKKAD.',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9946893341,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'Mr.Girish Nair',
                                'FollowupOwner'=>'Mr.Girish Nair',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200031',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2020-11-19',
                                'Reg_Date'=>'2020-12-05',
                                'Invoice_Date'=>'2020-12-05',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'SARANYA PRABHU',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2020-11-16 07:30:00',
                                'updated_at'=>'2021-06-30 07:30:00',
                                'remarks'=>''
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1018',
                                'Booking_Date'=>'2020-11-16 07:30:00',
                                'Lead_ID'=>'41825',
                                'Customer_ID'=>'100100713050',
                                'BCustomer_Name1'=>'PRINCY',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'W/o.Abhishek, Rohini Nivas, Thachankode, Kuzhalmannam, Palakkad.',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9946894431,
                                'Telephone'=>0,
                                'Customer_Email'=>'',
                                'Lead_Owner'=>'Mr.Girish Nair',
                                'FollowupOwner'=>'Mr.Girish Nair',
                                'Booking_Item'=>'Land',
                                'Project'=>'P200031',
                                'Product_Land'=>'',
                                'Product_Villa'=>'',
                                'Agreement_Date'=>'2020-11-05',
                                'Reg_Date'=>'2020-12-05',
                                'Invoice_Date'=>'2020-12-05',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'PRINCY',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'10',
                                'Branch_ID'=>'7000',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2020-11-16 07:30:00',
                                'updated_at'=>'2021-01-07 07:30:00',
                                'remarks'=>''
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1033',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'216046',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'Muhammed Anees - ID-216046',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'S/o.Nafeeesa P., Pulatharakkal House, Cherupulassery P.O., Ottappalam, Palakkad - 679 503.',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9895132286,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'mehaboo',
                                'FollowupOwner'=>'divyasatheesh',
                                'Booking_Item'=>'Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'PKD CGV VILLA 127',
                                'Product_Villa'=>'MUHAMMED ANEES',
                                'Agreement_Date'=>'2021-01-30',
                                'Reg_Date'=>'2021-02-14',
                                'Invoice_Date'=>'2021-10-05',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Muhammed Anees - ID-216046',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3015',
                                'Created_By'=>'sa',
                                'created_at'=>'2021-01-14 13:00:00',
                                'updated_at'=>'2021-01-14 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1034',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'215896',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'Mithun Nair - ID-215896',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'C/o Mohanan,House No.81,Vasant Apartments, Mayur Vihar ph.1,East Delhi-110091',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9868847893,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'karthkkannan',
                                'FollowupOwner'=>'divyasatheesh',
                                'Booking_Item'=>'Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'PKDCG-28A',
                                'Product_Villa'=>'MITHUN NAIR',
                                'Agreement_Date'=>'2021-01-30',
                                'Reg_Date'=>'2021-02-15',
                                'Invoice_Date'=>'2021-09-20',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Mithun Nair - ID-215896',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3015',
                                'Created_By'=>'sa',
                                'created_at'=>'2021-01-26 13:00:00',
                                'updated_at'=>'2021-01-26 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1035',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'214927',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'103850-BINDU -M.G',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'W/o . Rajesh P.N, Archana,Nedungottur , Shoranur, Palakkad-679121',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9446568371,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'shibinu',
                                'FollowupOwner'=>'divyasatheesh',
                                'Booking_Item'=>'Land + Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'Electricity Charges (14',
                                'Product_Villa'=>'103850-BINDU -M.G',
                                'Agreement_Date'=>'2021-02-02',
                                'Reg_Date'=>'2021-02-02',
                                'Invoice_Date'=>'2021-08-20',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'103850-BINDU -M.G',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Cancelled',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3014',
                                'Created_By'=>'sa',
                                'created_at'=>'2021-02-01 13:00:00',
                                'updated_at'=>'2021-02-01 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1036',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'214903',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'Mr Nikhil Kumar (CG 29)',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'6B-Sammohanam Apartments, Kalvakulam Road, Palakkad-678 001.',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>7356122059,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'shibinu',
                                'FollowupOwner'=>'Binoj',
                                'Booking_Item'=>'Land + Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'Electricity Charges CG2',
                                'Product_Villa'=>'Mr Nikhil Kumar (CG 29)',
                                'Agreement_Date'=>'2020-07-07',
                                'Reg_Date'=>'2020-07-30',
                                'Invoice_Date'=>'2021-05-30',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Mr Nikhil Kumar (CG 29)',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3014',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2021-02-01 13:00:00',
                                'updated_at'=>'2021-02-01 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1038',
                                'Booking_Date'=>'2023-04-04 00:38:18',
                                'Lead_ID'=>'214927',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'103850-BINDU -M.G',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'W/o.Rajesh P.N., Archana, Nedungottur, Shoranur, PALAKKAD - 679121.',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9446568371,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'shibinu',
                                'FollowupOwner'=>'divyasatheesh',
                                'Booking_Item'=>'Land + Villa',
                                'Project'=>'P200031',
                                'Product_Land'=>'Electricity Charges',
                                'Product_Villa'=>'103850-BINDU -M.G',
                                'Agreement_Date'=>'2020-07-07',
                                'Reg_Date'=>'2020-07-25',
                                'Invoice_Date'=>'2021-08-20',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'103850-BINDU -M.G',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3014',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2021-03-22 13:00:00',
                                'updated_at'=>'2021-03-22 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1039',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'216790',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'SINDHU - ID-216790',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'4/560, Poojapunyam, Cherad, Akathethara, Akathethara (P O), Palakkad, Kerala - 678008',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>9400671761,
                                'Telephone'=>0,
                                'Customer_Email'=>'No MailID',
                                'Lead_Owner'=>'mehaboo',
                                'FollowupOwner'=>'Binoj',
                                'Booking_Item'=>'Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'PKDCKRV-21',
                                'Product_Villa'=>'SINDHU',
                                'Agreement_Date'=>'2021-03-28',
                                'Reg_Date'=>'2021-04-12',
                                'Invoice_Date'=>'2022-05-07',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'SINDHU - ID-216790',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Approved',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3015',
                                'Created_By'=>'Mr.Girish Nair',
                                'created_at'=>'2021-03-22 13:00:00',
                                'updated_at'=>'2021-03-22 13:00:00',
                                'remarks'=>NULL
                                ] );
                                            
                                Booking_Details::create( [
                                'Booking_ID'=>'1040',
                                'Booking_Date'=>'2023-04-04 00:42:44',
                                'Lead_ID'=>'216863',
                                'Customer_ID'=>NULL,
                                'BCustomer_Name1'=>'Kaviyasri - ID-216863',
                                'BCustomer_Name2'=>'',
                                'BCustomer_Address'=>'9/11,Chinniyagowndanpudhur,Andipalayam,Tiruppur-641687',
                                'BCustomer_PostOffice'=>'',
                                'Bcustomer_District'=>'',
                                'BCustomer_State'=>'',
                                'Mobile_Number'=>7904551896,
                                'Telephone'=>0,
                                'Customer_Email'=>NULL,
                                'Lead_Owner'=>'sarath',
                                'FollowupOwner'=>'divyasatheesh',
                                'Booking_Item'=>'Villa',
                                'Project'=>'P200003',
                                'Product_Land'=>'PKD CG VILLA 54A',
                                'Product_Villa'=>'KAVIYASRI',
                                'Agreement_Date'=>'2021-04-13',
                                'Reg_Date'=>'2021-04-30',
                                'Invoice_Date'=>'2022-05-04',
                                'Loan_Amount'=>0,
                                'Income'=>0,
                                'Customer_AccountNo'=>'Kaviyasri - ID-216863',
                                'Customer_IDProof_Type'=>'',
                                'Customer_IDProof'=>'',
                                'Booking_Status'=>'Cancelled',
                                'Followup_DateTime'=>'0000-00-00 00:00:00',
                                'Company_ID'=>'8',
                                'Branch_ID'=>'3015',
                                'Created_By'=>'divyasatheesh',
                                'created_at'=>'2021-03-29 13:00:00',
                                'updated_at'=>'2021-03-29 13:00:00',
                                'remarks'=>NULL
                                ] );
        
    }
}
