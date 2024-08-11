<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Mail;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class ApiController extends Controller
{
    //admin//
    public function register(Request $req)
    {
        if (isset($req->email)) {
            if ($req->upid) {
                $existingUser = DB::table('allusers')->where('id', '<>', $req->upid)->where('email', $req->email)->first();
            } else {
                $existingUser = DB::table('allusers')->where('email', $req->email)->first();
            }
            if ($existingUser) {
                return response()->json(['message' => 'Email already exists', 'alreadyhave' => 1, 'success' => false], 400);
            } else {
                // Define the data to be inserted or updated
                $school_id = '';
                $school_name = '';
                if ($req->isschool_admin) {
                    $getuser_details = DB::table('allusers')->where('id', $req->userid)->first();
                    $school_id = $getuser_details->schoolid;
                    $school_name = $getuser_details->schoolname;
                }
                $class = json_decode($req->class);
                $section = json_decode($req->section);
                $Subject = json_decode($req->Subject);
                if ($req->role == 'Student') {
                    // Extracting value inside parentheses
                    preg_match('/\((.*?)\)/', $req->section_value, $matches);
                    $section_value = isset($matches[1]) ? $matches[1] : null;
                } else {
                    $section_value = $req->section_value;
                }
                $data = array();
                $data['isban'] = 0;
                if ($req->userid) {
                    $data['userid'] = $req->userid;
                }
                if ($school_id || $req->schoolid) {
                    $data['schoolid'] = $school_id ? $school_id : $req->schoolid;
                }
                if ($school_name || $req->schoolname) {
                    $data['schoolname'] = $school_name ? $school_name : $req->schoolname;
                }
                if ($req->username) {
                    $data['username'] = $req->username;
                }
                if ($req->email) {
                    $data['email'] = $req->email;
                }
                if ($req->categoryid) {
                    $data['categoryid'] = $req->categoryid;
                }
                if ($req->password) {
                    $data['password'] = $req->password;
                }
                if ($req->number) {
                    $data['number'] = $req->number;
                }
                if ($req->dob) {
                    $data['dob'] = $req->dob;
                }
                if ($req->role) {
                    $data['role'] = $req->role == "client" ? "client" : $req->role;
                }
                if ($req->role) {
                    $data['rolename'] = $req->role == "client" ? "Admin" : ($req->upid == 1 ? 'Master' : $req->role);
                }
                if ($req->role == 'Teacher' && $req->dojoin) {
                    $data['dojoin'] = $req->role == 'Teacher' && $req->dojoin ? $req->dojoin : null;
                }
                if ($req->role == 'Teacher' && $req->salary) {
                    $data['salary'] = $req->role == 'Teacher' && $req->salary ? $req->salary : null;
                }
                if ($req->role == 'Teacher' && $req->specialization) {
                    $data['specialization'] = $req->role == 'Teacher' && $req->specialization ? $req->specialization : null;
                }
                if ($req->role == 'Student' && $req->fathername) {
                    $data['fathername'] = $req->role == 'Student' && $req->fathername ? $req->fathername : null;
                }
                if ($req->role == 'Student' && $req->bloodgroup) {
                    $data['bloodgroup'] = $req->role == 'Student' && $req->bloodgroup ? $req->bloodgroup : null;
                }
                if ($req->role == 'Student' && $req->rollno) {
                    $data['rollno'] = $req->role == 'Student' && $req->rollno ? $req->rollno : null;
                }
                if ($req->role == 'Student' && $req->section_id) {
                    $data['section_id'] = $req->role == 'Student' && $req->section_id ? $req->section_id : null;
                }
                if ($req->role == 'Student' && $req->class_id) {
                    $data['class_id'] = $req->role == 'Student' && $req->class_id ? $req->class_id : null;
                }
                if ($section_value) {
                    $data['section_value'] = $section_value ? $req->class_value . " (" . $section_value . ")" : null;
                }
                if ($req->role == 'Student' && $req->class_value) {
                    $data['class_value'] = $req->role == 'Student' && $req->class_value ? $req->class_value : null;
                }
                if ($req->place) {
                    $data['place'] = $req->place ? $req->place : null;
                }
                if ($req->lastschool) {
                    $data['lastschool'] = $req->lastschool ? $req->lastschool : null;
                }
                if ($req->classcompleted) {
                    $data['classcompleted'] = $req->classcompleted ? $req->classcompleted : null;
                }
                if ($req->token) {
                    $data['token'] = $req->token;
                }

                if ($req->dobs) {
                    $data['dobs'] = $req->dobs ? $req->dobs : '';
                }
                if ($req->dobmin) {
                    $data['dobmin'] = $req->dobmin ? $req->dobmin : '';
                }
                if ($req->doa) {
                    $data['doa'] = $req->doa ? $req->doa : '';
                }
                if ($req->doamin) {
                    $data['doamin'] = $req->doamin ? $req->doamin : '';
                }
                if ($req->gender) {
                    $data['gender'] = $req->gender ? $req->gender : '';
                }
                if ($req->isdiable) {
                    $data['isdiable'] = $req->isdiable ? $req->isdiable : '';
                }
                if ($req->hobbies) {
                    $data['hobbies'] = $req->hobbies ? $req->hobbies : '';
                }
                if ($req->emergencynumber) {
                    $data['emergencynumber'] = $req->emergencynumber ? $req->emergencynumber : '';
                }
                if ($req->aadhar) {
                    $data['aadhar'] = $req->aadhar ? $req->aadhar : '';
                }

                if ($req->qualification) {
                    $data['qualification'] = $req->qualification ? $req->qualification : '';
                }
                if ($req->lastinstitutions) {
                    $data['lastinstitutions'] = $req->lastinstitutions ? $req->lastinstitutions : '';
                }
                if ($req->experince) {
                    $data['experince'] = $req->experince ? $req->experince : '';
                }
                if ($req->language) {
                    $data['language'] = $req->language ? $req->language : '';
                }

                if ($req->parents) {
                    $data['parents'] = $req->parents ? $req->parents : '';
                }
                if ($req->parentsoccupation) {
                    $data['parentsoccupation'] = $req->parentsoccupation ? $req->parentsoccupation : '';
                }
                if ($req->annualIncome) {
                    $data['annualIncome'] = $req->annualIncome ? $req->annualIncome : '';
                }
                if ($req->caste) {
                    $data['caste'] = $req->caste ? $req->caste : '';
                }

                // $data = [
                //     'userid' => $req->userid,
                //     'schoolid' => $school_id ? $school_id : $req->schoolid,
                //     'schoolname' => $school_name ? $school_name : $req->schoolname,
                //     'username' => $req->username,
                //     'email' => $req->email,
                //     'password' => $req->password,
                //     'number' => $req->number,
                //     'role' => $req->role == "client" ? "client" : $req->role,
                //     'rolename' => $req->role == "client" ? "Admin" : $req->role,
                //     'dojoin' => $req->role == 'Teacher' && $req->dojoin ? $req->dojoin : null,
                //     'salary' => $req->role == 'Teacher' && $req->salary ? $req->salary : null,
                //     'specialization' => $req->role == 'Teacher' && $req->specialization ? $req->specialization : null,
                //     'fathername' => $req->role == 'Student' && $req->fathername ? $req->fathername : null,
                //     'bloodgroup' => $req->role == 'Student' && $req->bloodgroup ? $req->bloodgroup : null,
                //     'rollno' => $req->role == 'Student' && $req->rollno ? $req->rollno : null,
                //     'section_id' => $req->role == 'Student' && $req->section_id ? $req->section_id : null,
                //     'class_id' => $req->role == 'Student' && $req->class_id ? $req->class_id : null,
                //     'section_value' => $section_value ? $section_value : null,
                //     'class_value' => $req->role == 'Student' && $req->class_value ? $req->class_value : null,
                //     'place' => $req->place ? $req->place : null,
                //     'token' => $req->token,
                // ];

                // Check if $req->upid is set
                if (!empty($req->upid)) {
                    // Update or insert the record
                    DB::table('allusers')->updateOrInsert(
                        ['id' => $req->upid], // Conditions to check for existing record
                        $data // Data for update or insert
                    );
                    $newUserId = $req->upid;
                } else {
                    // Insert the new record and get its ID
                    $newUserId = DB::table('allusers')->insertGetId([
                        'add_date' => date('Y-m-d'),
                        'add_mindate' => date('Ymd')
                    ] + $data);
                    if ($req->role == 'Agent') {
                        $this->createapikeys($newUserId);
                    }

                }
                if ($req->role == 'Teacher') {
                    if ($class) {
                        DB::table('teacher_class')->where('userid', $newUserId)->delete();
                        foreach ($class as $item) {
                            $courseData = [
                                'userid' => $newUserId,
                                'data_id' => $item->value,
                                'data_label' => $item->label
                            ];
                            DB::table('teacher_class')->insert($courseData);
                        }
                    }
                    if ($section) {
                        DB::table('teacher_sec')->where('userid', $newUserId)->delete();
                        foreach ($section as $item) {
                            $semister = [
                                'userid' => $newUserId,
                                'data_id' => $item->value,
                                'data_label' => $item->label
                            ];
                            DB::table('teacher_sec')->insert($semister);
                        }
                    }
                    if ($Subject) {
                        DB::table('teacher_subject')->where('userid', $newUserId)->delete();
                        foreach ($Subject as $item) {
                            $semister = [
                                'userid' => $newUserId,
                                'data_id' => $item->value,
                                'data_label' => $item->label
                            ];
                            DB::table('teacher_subject')->insert($semister);
                        }
                    }
                }
                if ($req->role == 'Student') {
                    if ($req->class_value) {
                        DB::table('teacher_class')->where('userid', $newUserId)->delete();
                        $courseData = [
                            'userid' => $newUserId,
                            'data_id' => $req->class_id,
                            'data_label' => $req->class_value
                        ];
                        DB::table('teacher_class')->insert($courseData);
                    }
                    if ($req->section_value) {
                        DB::table('teacher_sec')->where('userid', $newUserId)->delete();
                        $courseData = [
                            'userid' => $newUserId,
                            'data_id' => $req->section_id,
                            'data_label' => $req->section_value
                        ];
                        DB::table('teacher_sec')->insert($courseData);
                    }
                }
                if ($newUserId) {
                    $user = [
                        'schoolid' => $req->schoolid,
                        'schoolname' => $req->schoolname,
                        'username' => $req->username,
                        'email' => $req->email,
                        'password' => $req->password,
                        'number' => $req->number,
                        "avatar" => null,
                        "role" => $req->role,
                        "token" => $req->token,
                        "ability" => [
                            [
                                "action" => "manage",
                                "subject" => "all"
                            ]
                        ],
                        "id" => $newUserId
                    ];

                    $accessToken = "your_access_token"; // Replace with your actual access token

                    $response = [
                        "user" => $user,
                        "accessToken" => $accessToken,
                        "success" => true
                    ];

                    return response()->json($response, 200);
                } else {
                    return response()->json(['message' => 'Failed to register user', 'success' => false], 400);
                }
            }
        }
    }

    public function dashboarddata($id)
    {
        $isadmin = $this->checkIsadmin($id);
        if ($isadmin) {
            $res = array();
            $q = DB::table('tnslog');
            if (!$isadmin) {
                $q = $q->where('userid', $id);
            }
            $qq = $q;
            $res['todaysuccessamount'] = DB::table('tnslog')->where('order_status', 4)->where('mindate', date('Ymd'))->sum('amount');
            $res['claim'] = DB::table('tnslog')->where('is_clam', 1)->count();
            $res['unclaim'] = DB::table('tnslog')->where('is_clam', 0)->count();
            $todaysuccess = DB::table('tnslog')->where('order_status', 4)->where('mindate', date('Ymd'))->count();
            $todayfailed = DB::table('tnslog')->where('order_status', 5)->where('mindate', date('Ymd'))->count();
            $totalsuccess = DB::table('tnslog')->where('order_status', 4)->count();
            $totalearning = DB::table('tnslog')->where('order_status', 4)->sum('amount');
            $totaltns = DB::table('tnslog')->count();
            $totalpending = DB::table('tnslog')->where('order_status', 3)->count();
            $res['staticdata'] = [
                'todaysuccess' => $todaysuccess,
                'todayfailed' => $todayfailed,
                'totalsuccess' => $totalsuccess,
                'totalearning' => $totalearning,
                'totaltns' => $totaltns,
                'totalpending' => $totalpending
            ];
            $res['recent_list'] = DB::table('tnslog')->OrderBy('id', 'DESC')->limit('5')->get();
            $res['total_success'] = DB::table('tnslog')->where('order_status', 4)->count();
            $res['total_faild'] = DB::table('tnslog')->where('order_status', 5)->count();

            $total_success = DB::table('tnslog')->where('order_status', 4)->count();
            $total_fail = DB::table('tnslog')->where('order_status', 5)->count();
            $total_t = DB::table('tnslog')->count();
            if ($total_t > 0) {
                // Calculate the percentage
                $percentage = ($total_success / $total_t) * 100;
                $percentage_f = ($total_fail / $total_t) * 100;
                // Round the percentage to the nearest whole number
                $rounded_percentage = round($percentage);
                $rounded_percentage_f = round($percentage_f);
            } else {
                // Handle the case where total_faild is 0 (to avoid division by zero)
                $rounded_percentage = 0;
                $rounded_percentage_f = 0;
            }

            // Store the rounded percentage in $res
            $res['percentage'] = $rounded_percentage;
            $res['percentage_f'] = $rounded_percentage_f;

            $startOfMonth = date('Ym01'); // Start of the current month
            $endOfMonth = date('Ymt'); // End of the current month

            // Query to sum amounts where mindate is between the start and end of the current month and order_status is 4
            $res['this_month'] = DB::table('tnslog')
                ->whereBetween('mindate', [$startOfMonth, $endOfMonth])
                ->where('order_status', 4)
                ->sum('amount');


            return response()->json(['success' => true, 'data' => $res], 200);
        } else {
            $res = array();
            $res['todaysuccessamount'] = DB::table('tnslog')->where('userid', $id)->where('order_status', 4)->where('mindate', date('Ymd'))->sum('amount');
            $res['claim'] = DB::table('tnslog')->where('userid', $id)->where('is_clam', 1)->count();
            $res['unclaim'] = DB::table('tnslog')->where('userid', $id)->where('is_clam', 0)->count();
            $todaysuccess = DB::table('tnslog')->where('userid', $id)->where('order_status', 4)->where('mindate', date('Ymd'))->count();
            $todayfailed = DB::table('tnslog')->where('userid', $id)->where('order_status', 5)->where('mindate', date('Ymd'))->count();
            $totalsuccess = DB::table('tnslog')->where('userid', $id)->where('order_status', 4)->count();
            $totalearning = DB::table('tnslog')->where('userid', $id)->where('order_status', 4)->sum('amount');
            $totaltns = DB::table('tnslog')->where('userid', $id)->count();
            $totalpending = DB::table('tnslog')->where('userid', $id)->where('order_status', 3)->count();
            $res['staticdata'] = [
                'todaysuccess' => $todaysuccess,
                'todayfailed' => $todayfailed,
                'totalsuccess' => $totalsuccess,
                'totalearning' => $totalearning,
                'totaltns' => $totaltns,
                'totalpending' => $totalpending
            ];
            $res['recent_list'] = DB::table('tnslog')->where('userid', $id)->OrderBy('id', 'DESC')->limit('5')->get();
            $res['total_success'] = DB::table('tnslog')->where('userid', $id)->where('order_status', 4)->count();
            $res['total_faild'] = DB::table('tnslog')->where('userid', $id)->where('order_status', 5)->count();

            $total_success = DB::table('tnslog')->where('userid', $id)->where('order_status', 4)->count();
            $total_fail = DB::table('tnslog')->where('userid', $id)->where('order_status', 5)->count();
            $total_t = DB::table('tnslog')->where('userid', $id)->count();
            if ($total_t > 0) {
                // Calculate the percentage
                $percentage = ($total_success / $total_t) * 100;
                $percentage_f = ($total_fail / $total_t) * 100;
                // Round the percentage to the nearest whole number
                $rounded_percentage = round($percentage);
                $rounded_percentage_f = round($percentage_f);
            } else {
                // Handle the case where total_faild is 0 (to avoid division by zero)
                $rounded_percentage = 0;
                $rounded_percentage_f = 0;
            }

            // Store the rounded percentage in $res
            $res['percentage'] = $rounded_percentage;
            $res['percentage_f'] = $rounded_percentage_f;

            $startOfMonth = date('Ym01'); // Start of the current month
            $endOfMonth = date('Ymt'); // End of the current month

            // Query to sum amounts where mindate is between the start and end of the current month and order_status is 4
            $res['this_month'] = DB::table('tnslog')
                ->whereBetween('mindate', [$startOfMonth, $endOfMonth])
                ->where('order_status', 4)
                ->where('userid', $id)
                ->sum('amount');
            return response()->json(['success' => true, 'data' => $res], 200);
        }

    }
    public function createapikeys($id)
    {
        $key1 = Str::random(8);
        $key2 = Str::random(4);
        $key3 = Str::random(4);
        $key4 = Str::random(4);
        $key5 = Str::random(12);
        $finalkey = $key1 . '-' . $key2 . '-' . $key3 . '-' . $key4 . '-' . $key5;
        DB::table('allusers')->where('id', $id)->update(['api_key' => $finalkey]);
        return true;
    }
    public function userinfo(Request $req)
    {
        $data = DB::table('allusers')->where('id', $req->userid)->where('isban', 0)->where('is_delete', 0)->select('id', 'username', 'email', 'role', 'api_key', 'isban')->first();
        $data->doclink = storageurl() . 'api/apidocumentation.txt';
        return $data;
    }

    // ADD BANK ACCOUNT
    public function getbankaccount($id)
    {
        $list = DB::table('bankaccount')->where('userid', $id)->where('is_delete', 0)->OrderBy('id', 'DESC')->get();
        return $list;
    }
    public function getactivebanks($id)
    {
        $list = DB::table('bankaccount')->where('userid', $id)->where('is_delete', 0)->where('statusvalue', 1)->OrderBy('id', 'DESC')->get();
        return $list;
    }
    public function editbank($id)
    {
        $data = DB::table('bankaccount')->where('id', $id)->where('is_delete', 0)->first();
        if ($data) {
            return response()->json(['success' => true, 'data' => $data]);
        } else {
            return response()->json(['success' => false, 'message' => 'No Bank found']);
        }
    }
    public function addbankaccount(Request $req)
    {
        if ($req->upid) {
            $existingUser = DB::table('bankaccount')->where('id', '<>', $req->upid)->where('upi', $req->upi)->where('is_delete', 0)->first();
        } else {
            $existingUser = DB::table('bankaccount')->where('upi', $req->upi)->where('is_delete', 0)->first();
        }
        if ($existingUser) {
            return response()->json(['message' => 'UPI Id already exists', 'alreadyhave' => 1, 'success' => false], 400);
        } else {
            $data = array();
            $data['userid'] = $req->userid;
            $data['accountname'] = $req->accountname;
            $data['upi'] = $req->upi;
            $data['bankaccountno'] = $req->bankaccountno;
            $data['targetdaily'] = $req->targetDaily;
            $data['banknamevalue'] = $req->selectedbankvalue;
            $data['banknamelable'] = $req->selectedbanklable;
            $data['statusvalue'] = $req->selectedbankstatusvalue;
            $data['statuslable'] = $req->selectedbankstatuslable;
            if ($req->hasFile('qrimage')) {
                $image = $req->file('qrimage');
                $uniqueName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public', $uniqueName);
                $data['qrimage'] = $uniqueName;
            }
            $data['is_delete'] = 0;
            if ($req->upid) {
                DB::table('bankaccount')->where('id', $req->upid)->update($data);
            } else {
                DB::table('bankaccount')->insert($data);
            }
            return response()->json(['success' => true, 'message' => 'Success']);
        }
    }
    public function blockuser($id)
    {
        $udata = DB::table('allusers')->where('id', $id)->first();
        $userblockstatus = $udata->isban;
        $message = "";
        if ($userblockstatus == 0) {
            DB::table('allusers')->where('id', $id)->update(['isban' => 1]);
            $message = 'User has been blocked';
        } else {
            DB::table('allusers')->where('id', $id)->update(['isban' => 0]);
            $message = 'User has been unblocked';
        }
        return response()->json(['success' => true, 'message' => $message]);
    }
    public function candidatedataview($id)
    {
        DB::statement("SET sql_mode = ''");
        // Fetch user's class and school ID
        $user = DB::table('allusers')->where('id', $id)->first();

        if (!$user || !$user->class_id) {
            return response()->json(['success' => false, 'message' => 'User not found or class not assigned'], 404);
        }

        $userClass = $user->class_id;
        $schoolId = $user->schoolid;

        // Fetch previously paid transactions grouped by year and month
        $storeallyearmonths = DB::table('feepayments')
            ->select('year', 'month')
            ->where('studentid', $id)
            ->groupBy('year', 'month')
            ->get();

        // Initialize the response data
        $responseData = [
            'success' => true,
            'data' => [],
        ];

        // Fetch all monthly fees for the user's class and school
        $monthlyFees = DB::table('feevalue')
            ->join('allusers', 'feevalue.userid', '=', 'allusers.id')
            ->where('feevalue.classid', $userClass)
            ->where('allusers.schoolid', $schoolId)
            ->where('feevalue.feetype', 'Monthly')
            ->select('feevalue.*')
            ->get();

        // Organize monthly fees by fee_id for easier access
        $monthlyFeesById = [];
        foreach ($monthlyFees as $fee) {
            $monthlyFeesById[$fee->feeid] = [
                'fee_id' => $fee->feeid,
                'fee_name' => $fee->feename,
                'amount' => $fee->amount,
                'due_amount' => $fee->amount,
                'paid_amount' => 0,
                'is_paid' => 0,
            ];
        }

        // Iterate over each year and month for monthly data
        foreach ($storeallyearmonths as $row) {
            // Get the year and month from the row
            $year = $row->year;
            $month = $row->month;

            // Clone the monthly fees array for this specific year and month
            $monthlyFeesData = array_map(function ($fee) {
                return $fee;
            }, $monthlyFeesById);

            // Fetch individual transactions for this year and month with feeduration 'Monthly'
            $transactions = DB::table('feepayments')
                ->where('studentid', $id)
                ->where('year', $year)
                ->where('month', $month)
                ->where('feeduration', 'Monthly')
                ->get();

            // Initialize the transaction history array
            $transactionHistory = [];

            // Iterate over each transaction
            foreach ($transactions as $transaction) {
                // Add the transaction to the transaction history
                $transactionHistory[] = [
                    'transaction_id' => $transaction->id,
                    'fee_type_id' => $transaction->feetypeid,
                    'fee_name' => $transaction->feetypename,
                    'amount' => $transaction->amount,
                    'date' => $transaction->originalpaymentdate ? $transaction->originalpaymentdate : $transaction->paydate,
                    'payment_method' => $transaction->paymethod ?? 'Unknown',
                    'status' => 'Completed',
                ];

                // Update the corresponding fee's paid amount and due amount
                if (isset($monthlyFeesData[$transaction->feetypeid])) {
                    $monthlyFeesData[$transaction->feetypeid]['paid_amount'] += $transaction->amount;
                    $monthlyFeesData[$transaction->feetypeid]['due_amount'] = $monthlyFeesData[$transaction->feetypeid]['amount'] - $monthlyFeesData[$transaction->feetypeid]['paid_amount'];
                    $monthlyFeesData[$transaction->feetypeid]['is_paid'] = $monthlyFeesData[$transaction->feetypeid]['due_amount'] <= 0 ? 1 : 0;
                }
            }

            // Get the month name
            $monthname = date("F", mktime(0, 0, 0, $month, 1));

            // Add the monthly fees and transactions data to the response data for this year and month
            $responseData['data']['monthly'][$year][$monthname] = [
                'fees' => array_values($monthlyFeesData),
                'transactions' => $transactionHistory,
            ];
        }

        // Check if there are transactions for the current month
        $currentMonth = date('m');
        $currentYear = date('Y');

        if (
            !$storeallyearmonths->contains(function ($value) use ($currentMonth, $currentYear) {
                return $value->month == $currentMonth && $value->year == $currentYear;
            })
        ) {
            // Clone the monthly fees array for the current month
            $currentMonthFees = array_map(function ($fee) {
                $fee['due_amount'] = $fee['amount'];
                $fee['paid_amount'] = 0;
                $fee['is_paid'] = 0;
                return $fee;
            }, $monthlyFeesById);

            $currentMonthName = date("F");

            $currentMonthFeeDetails = array_values($currentMonthFees);

            // Add the current month's default fees to the response data
            $responseData['data']['monthly'][$currentYear][$currentMonthName] = [
                'fees' => $currentMonthFeeDetails,
                'transactions' => [],
            ];
        }

        // Fetch yearly fees and transactions
        $responseDatayearly = DB::table('feepayments')
            ->where('studentid', $id)
            ->where('feeduration', 'Yearly')
            ->groupBy('year')
            ->get();

        // Fetch all yearly fees for the user's class and school
        $yearlyFees = DB::table('feevalue')
            ->join('allusers', 'feevalue.userid', '=', 'allusers.id')
            ->where('feevalue.classid', $userClass)
            ->where('allusers.schoolid', $schoolId)
            ->where('feevalue.feetype', 'Yearly')
            ->select('feevalue.*')
            ->get();

        // Organize yearly fees by fee_id for easier access
        $yearlyFeesById = [];
        foreach ($yearlyFees as $fee) {
            $yearlyFeesById[$fee->feeid] = [
                'fee_id' => $fee->feeid,
                'fee_name' => $fee->feename,
                'amount' => $fee->amount,
                'due_amount' => $fee->amount,
                'paid_amount' => 0,
                'is_paid' => 0,
            ];
        }

        // Initialize a flag to track if any yearly transactions exist
        $yearlyTransactionsExist = false;

        // Iterate over yearly transactions
        foreach ($responseDatayearly as $yearlyTransaction) {
            $yearlyTransactionsExist = true; // At least one yearly transaction exists
            $year = $yearlyTransaction->year;

            // Clone the yearly fees array for this specific year
            $yearlyFeesData = array_map(function ($fee) {
                return $fee;
            }, $yearlyFeesById);

            // Fetch individual transactions for this year with feeduration 'Yearly'
            $transactions = DB::table('feepayments')
                ->where('studentid', $id)
                ->where('year', $year)
                ->where('feeduration', 'Yearly')
                ->get();

            // Initialize the transaction history array
            $transactionHistory = [];

            // Iterate over each transaction
            foreach ($transactions as $transaction) {
                // Add the transaction to the transaction history
                $transactionHistory[] = [
                    'transaction_id' => $transaction->id,
                    'fee_type_id' => $transaction->feetypeid,
                    'fee_name' => $transaction->feetypename,
                    'amount' => $transaction->amount,
                    'date' => $transaction->originalpaymentdate ? $transaction->originalpaymentdate : $transaction->paydate,
                    'payment_method' => $transaction->paymethod ?? 'Unknown',
                    'status' => 'Completed',
                ];

                // Update the corresponding fee's paid amount and due amount
                if (isset($yearlyFeesData[$transaction->feetypeid])) {
                    $yearlyFeesData[$transaction->feetypeid]['paid_amount'] += $transaction->amount;
                    $yearlyFeesData[$transaction->feetypeid]['due_amount'] = $yearlyFeesData[$transaction->feetypeid]['amount'] - $yearlyFeesData[$transaction->feetypeid]['paid_amount'];
                    $yearlyFeesData[$transaction->feetypeid]['is_paid'] = $yearlyFeesData[$transaction->feetypeid]['due_amount'] <= 0 ? 1 : 0;
                }
            }

            // Add the yearly fees and transactions data to the response data for this year
            $responseData['data']['yearly'][$year] = [
                'fees' => array_values($yearlyFeesData),
                'transactions' => $transactionHistory,
            ];
        }

        // If no yearly transactions exist, add the default yearly fees
        if (!$yearlyTransactionsExist) {
            $currentYear = date('Y');
            $defaultYearlyFees = array_map(function ($fee) {
                $fee['due_amount'] = $fee['amount'];
                $fee['paid_amount'] = 0;
                $fee['is_paid'] = 0;
                return $fee;
            }, $yearlyFeesById);

            $responseData['data']['yearly'][$currentYear] = [
                'fees' => array_values($defaultYearlyFees),
                'transactions' => [],
            ];
        }

        return response()->json($responseData, 200);
    }



    public function getuserdetails($id)
    {
        $data = DB::table('allusers')->where('id', $id)->first();
        return response()->json(['success' => true, 'data' => $data], 200);
    }

    public function adminid($uid)
    {
        $arr = [];
        $data = DB::table('allusers')->where('id', $uid)->first();
        if ($data) {
            $scholl_id = $data->schoolid;
            if ($scholl_id) {
                $arr = DB::table('allusers')->where('schoolid', $scholl_id)->whereIn('role', ['client', 'Trusti'])->pluck('id')->all();
            }
        }
        return $arr;
    }
    public function getregister(Request $req)
    {
        $arr = $this->adminid($req->userid ? $req->userid : 0);
        if ($req->userid == 1) {
            $users = DB::table('allusers')
                ->where('id', '<>', 1)
                ->where('is_delete', 0)
                ->whereIn('rolename', ['Agent'])
                ->get();
            $users->transform(function ($user) {
                $catdata = DB::table('category')
                    ->where('id', $user->categoryid)
                    ->first();
                if ($catdata) {
                    $user->category_name = $catdata->categoryname;
                } else {
                    $user->category_name = "";
                }
                return $user;
            });
            return $users;

        }
        if ($req->userrole == 'client' || $req->userrole == 'Trusti') {
            // return DB::table('allusers')->where('userid', $req->userid)->whereIn('rolename', ['Teacher', 'Parent'])->get();
            $users = DB::table('allusers')
                ->whereIn('userid', $arr)
                ->where('is_delete', 0)
                ->whereIn('rolename', ['Teacher', 'Parent', 'Trusti'])
                ->get();
            $users->transform(function ($user) {
                $classess = DB::table('teacher_class')
                    ->where('userid', $user->id)
                    ->get()
                    ->toArray();
                $section_value = DB::table('teacher_sec')
                    ->where('userid', $user->id)
                    ->get()
                    ->toArray();
                $subject = DB::table('teacher_subject')
                    ->where('userid', $user->id)
                    ->get()
                    ->toArray();
                $user->class_value = $classess;
                $user->section_value = $section_value;
                $user->subject = $subject;
                return $user;
            });
            return $users;
        }
    }
    public function deleteuser($id)
    {
        return DB::table('allusers')->where('id', $id)->update(['is_delete' => 1]);
    }
    public function edituser($id)
    {
        $user = DB::table('allusers')->where('id', $id)->first();
        $category = DB::table('category')->where('id', $user->categoryid)->first();
        $result = [
            'user' => $user,
            'category_name' => $category->categoryname,
        ];

        return $result;

    }
    public function sendotpmail($otp, $uid)
    {
        $existingUser = DB::table('allusers')->where('id', $uid)->first();
        $data = [
            'subject' => 'Login OTP',
            'email' => $existingUser->email,
            'otp' => $otp,
        ];
        $res = Mail::send('loginotpsend', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function adminlogin(Request $req)
    {
        $where = array();
        $where['email'] = $req->loginEmail;
        $where['password'] = $req->password;
        $existingUser = DB::table('allusers')->where($where)->first();  
        if (!empty($existingUser)) {
            $userData = array(
                'id' => $existingUser->id,
                'fullname' => $existingUser->username,
                'username' => $existingUser->username,
                'email' => $existingUser->email,
                'avatar' => $existingUser->profilepic,
                'role' => $existingUser->role,
                'class_id' => $existingUser->class_id,
                'rolename' => $existingUser->rolename,
                'token' => $existingUser->token,
                // 'logintime' => date("h:i:s")->toDateTimeString(),
                'ability' => array(array('action' => 'manage', 'subject' => 'all')),
                'extras' => array('eCommerceCartItemsCount' => 5)
            );

            return $userData;
        } else {
            return response()->json(array('error' => 'User not found'));
        }
    }
    // ADD CATEGORY
    public function addcategory(Request $req)
    {
        if ($req->upid) {
            $exist = DB::table('category')->where('id', '<>', $req->upid)->where('categoryname', $req->categoryname)->where('is_delete', 0)->first();
        } else {
            $exist = DB::table('category')->where('categoryname', $req->categoryname)->where('is_delete', 0)->first();
        }
        if ($exist) {
            return response()->json(['success' => false, 'message' => 'Category Already Exists']);
        }
        $data = array();
        $data['userid'] = $req->userid;
        $data['categoryname'] = $req->categoryname;
        $data['is_delete'] = 0;
        $data['is_active'] = 0;
        $check = DB::table('category')->where('id', $req->upid)->where('is_delete', 0)->first();
        if (!empty($check)) {
            DB::table('category')->where('id', $req->upid)->update($data);
            return response()->json(['success' => true, 'message' => 'Updated successfully']);
        } else {
            DB::table('category')->insert($data);
            return response()->json(['success' => true, 'message' => 'added successfully',]);
        }
    }
    public function getcategorylist($id)
    {
        return DB::table('category')->where('userid', $id)->where('is_delete', 0)->get();
    }
    public function deletecategory(Request $req)
    {
        return DB::table('category')->where('id', $req->id)->update(['is_delete' => 1]);
    }
    public function editcategory(Request $req)
    {
        return DB::table('category')->where('id', $req->id)->where('is_delete', 0)->first();
    }
    public function categorystatus($id)
    {
        $udata = DB::table('category')->where('id', $id)->first();
        $userblockstatus = $udata->is_active;
        $message = "";
        if ($userblockstatus == 0) {
            DB::table('category')->where('id', $id)->update(['is_active' => 1]);
            $message = 'Change status to inactive';
        } else {
            DB::table('category')->where('id', $id)->update(['is_active' => 0]);
            $message = 'Change status to active';
        }
        return response()->json(['success' => true, 'message' => $message]);
    }

    public function getupitocategory($id)
    {
        $data = DB::table('category_level')->where('catid', $id)->get();
        $result = [];

        // Step 2: Loop through the data to get bankid and fetch UPI details
        foreach ($data as $item) {
            // Step 3: Use bankid to fetch UPI details from bank table
            $upiDetails = DB::table('bankaccount')->where('id', $item->bankid)->first();

            // Step 4: Add the UPI details to the result array
            $result[] = [
                'upilable' => $item->leveltype,
                'bankid' => $upiDetails->id,
                'upi' => $upiDetails->upi
            ];
        }

        return $result;
    }
    public function addupitocategory(Request $req)
    {
        DB::table('category_level')->where('userid', $req->userid)->where('catid', $req->categoryid)->delete();
        $data = array();
        $data['userid'] = $req->userid;
        $data['catid'] = $req->categoryid;
        if ($req->upi1) {
            $data['leveltype'] = 1;
            $data['bankid'] = $req->upi1;
            DB::table('category_level')->insert($data);
        }
        if ($req->upi2) {
            $data['leveltype'] = 2;
            $data['bankid'] = $req->upi2;
            DB::table('category_level')->insert($data);
        }
        if ($req->upi3) {
            $data['leveltype'] = 3;
            $data['bankid'] = $req->upi3;
            DB::table('category_level')->insert($data);
        }
        if ($req->upi4) {
            $data['leveltype'] = 4;
            $data['bankid'] = $req->upi4;
            DB::table('category_level')->insert($data);
        }
        if ($req->upi5) {
            $data['leveltype'] = 5;
            $data['bankid'] = $req->upi5;
            DB::table('category_level')->insert($data);
        }
        if ($req->upi6) {
            $data['leveltype'] = 6;
            $data['bankid'] = $req->upi6;
            DB::table('category_level')->insert($data);
        }
        if ($req->upi7) {
            $data['leveltype'] = 7;
            $data['bankid'] = $req->upi7;
            DB::table('category_level')->insert($data);
        }
        return response()->json(['success' => true, 'message' => 'Updated successfully']);
    }
       public function updatepassword(Request $req)
    {
        $data = DB::table('allusers')->where('id', $req->userid)->first();
        if ($data) {
            if ($req->oldpassword == $data->password) {
                DB::table('allusers')->where('id', $req->userid)->update(['password' => $req->newpassword]);
                return response()->json(['success' => true, 'message' => 'Successful'], 201);
            } else {
                return response()->json(['success' => false, 'message' => 'Old password not match'], 400);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'No user found'], 404);
        }
    }
    public function updateprofile(Request $req)
    {
        $data = DB::table('allusers')->where('id', $req->userid)->first();
        if ($data) {
            $data = array();
            if ($req->hasFile('profilepic')) {
                $image = $req->file('profilepic');
                $uniqueName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public', $uniqueName);
                $data['profilepic'] = $uniqueName;
            }
            $data['email'] = $req->email;
            $data['username'] = $req->username;
            $data['number'] = $req->number;
            $data['place'] = $req->address;
            DB::table('allusers')->where('id', $req->userid)->update($data);
            return response()->json(['success' => true, 'message' => 'Successful'], 201);
        } else {
            return response()->json(['success' => false, 'message' => 'No user found'], 404);
        }
    }
    
    // FORGOTPASSWORD
    public function gen_reset_password(Request $req)
    {
        $check = DB::table('allusers')->where('email', $req->email)->where('is_delete', 0)->first();
        if ($check) {
            $token = Str::random(20);
            DB::table('allusers')->where('id', $check->id)->where('is_delete', 0)->update(['pass_token' => $token]);
            $data = [
                'subject' => 'Password Reset',
                'email' => $check->email,
                'url' => 'https://abhianya.com/apiweb/login/' . $token,
            ];
            Mail::send('forgotpassword', $data, function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject']);
            });
            return response()->json(['success' => true, 'message' => 'Password reset link send to your email.'], 200);
        } else {
            return response()->json(['success' => false, 'message' => "No user found"], 400);
        }
    }
    public function verify_reset_password(Request $req)
    {
        $check = DB::table('allusers')->where('pass_token', $req->passtoken)->where('is_delete', 0)->first();
        if ($check) {
            return response()->json(['success' => true, 'message' => 'Successful'], 200);
        } else {
            return response()->json(['success' => false, 'message' => "Invalid Token"], 400);
        }
    }
    public function update_new_password(Request $req)
    {
        $check = DB::table('allusers')->where('pass_token', $req->passtoken)->where('is_delete', 0)->update(['password' => $req->password, 'pass_token' => 1]);
        if ($check) {
            return response()->json(['success' => true, 'message' => 'Successful'], 200);
        } else {
            return response()->json(['success' => false, 'message' => "Invalid Token"], 400);
        }
    }
    // Upload stetment LOG
    public function uploadstetmentlist()
    {
        $data = DB::table('uploadstement')
            ->join('bankaccount', 'uploadstement.bankid', '=', 'bankaccount.id')
            ->orderBy('uploadstement.id', 'DESC')
            ->select(
                'uploadstement.*',
                'bankaccount.accountname as accountname',
                'bankaccount.banknamelable as bank_name'
            )
            ->get();
        return response()->json(['success' => true, 'data' => $data]);
    }
    public function unclamstetmentlist()
    {
        $data = DB::table('uploadstement')
            ->join('bankaccount', 'uploadstement.bankid', '=', 'bankaccount.id')
            ->orderBy('uploadstement.id', 'DESC')
            ->where('uploadstement.isclaimed', 0)
            ->select(
                'uploadstement.*',
                'bankaccount.accountname as accountname',
                'bankaccount.banknamelable as bank_name'
            )
            ->get();
        return response()->json(['success' => true, 'data' => $data]);
    }
    // PAYMENT API
    public function verifytxnid(Request $req)
    {
        $txnid = $req->txnid;
        if (!$txnid) {
            return response()->json(['success' => false, 'message' => 'Tnxid is required'], 400);
        }
        $check = DB::table('tnslog')->where('txnid', $txnid)->where('order_status', 1)->count();
        if ($check > 0) {
            $data = DB::table('tnslog')->where('txnid', $txnid)->where('order_status', 1)->first();
            $res = array();
            $res['txnid'] = $data->txnid;
            $res['amount'] = $data->amount;
            $res['return_url'] = $data->redirecturl;
            $res['upi_id'] = $data->upi;
            $res['qrcode_url'] = storageurl() . $data->qrimage;
            return response()->json(['success' => true, 'data' => $res], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid Txnid'], 400);
        }
    }
    public function ordercreate(Request $req)
    {
        $secretKey = $req->header('Secretkey');
        if (!$secretKey) {
            return response()->json(['success' => false, 'message' => 'Secret key is missing in the request header'], 401);
        }
        $checkSecretKey = DB::table('allusers')->where('api_key', $secretKey)->where('is_delete', 0)->count();
        if ($checkSecretKey == 0) {
            return response()->json(['success' => false, 'message' => 'Invalid secret key provided.'], 403);
        }
        $checkIsban = DB::table('allusers')->where('api_key', $secretKey)->where('isban', 1)->count();
        if ($checkIsban > 0) {
            return response()->json(['success' => false, 'message' => 'Your account has been banned contact our support.'], 401);
        }
        $user_data = DB::table('allusers')->where('api_key', $secretKey)->first();
        do {
            // Generate a random transaction ID
            $tnxid = 'Order-' . rand(11111111111111, 99999999999999);

            // Check if the transaction ID already exists in the database
            $exists = DB::table('orderid_gen')->where('orderid', $tnxid)->exists();

        } while ($exists);
        $data = array();
        $data['userid'] = $user_data->id;
        $data['orderid'] = $tnxid;
        $data['date'] = date('Y-m-d');
        $data['time'] = date("h:i A");
        DB::table('orderid_gen')->insert($data);
        return response()->json(['success' => true, 'orderid' => $tnxid], 200);
    }
    public function ordersubmit(Request $req)
    {
        // Secret Key validation as before
        $secretKey = $req->header('Secretkey');
        if (!$secretKey) {
            return response()->json(['success' => false, 'message' => 'Secret key is missing in the request header'], 401);
        }
        $checkSecretKey = DB::table('allusers')->where('api_key', $secretKey)->count();
        if ($checkSecretKey == 0) {
            return response()->json(['success' => false, 'message' => 'Invalid secret key provided.'], 403);
        }

        // Amount validation as before
        $amount = $req->amount;
        if (!$amount) {
            return response()->json(['success' => false, 'message' => 'Amount is required.'], 400);
        }
        if (!is_numeric($amount)) {
            return response()->json(['success' => false, 'message' => 'Amount must be a numeric value.'], 400);
        }
        $minAmount = 0.01;
        if ($amount < $minAmount) {
            return response()->json(['success' => false, 'message' => 'Amount must be greater than zero.'], 400);
        }
        $maxAmount = 1000000;
        if ($amount > $maxAmount) {
            return response()->json(['success' => false, 'message' => 'Amount exceeds the maximum limit.'], 400);
        }
        if (preg_match('/^\d+(\.\d{1,2})?$/', $amount) === 0) {
            return response()->json(['success' => false, 'message' => 'Amount should have up to two decimal places.'], 400);
        }

        // Handling callbackURL and redirectURL
        $callbackURL = $req->callbackURL;
        $redirectURL = $req->redirectURL;
        $devicetype = $req->devicetype;
        $orderid = $req->orderid;
        $note = $req->note;

        if (!$callbackURL || !filter_var($callbackURL, FILTER_VALIDATE_URL)) {
            return response()->json(['success' => false, 'message' => 'Invalid or missing callback URL.'], 400);
        }

        if (!$redirectURL || !filter_var($redirectURL, FILTER_VALIDATE_URL)) {
            return response()->json(['success' => false, 'message' => 'Invalid or missing redirect URL.'], 400);
        }
        if (!$devicetype) {
            return response()->json(['success' => false, 'message' => 'devicetype is required.'], 400);
        }
        if (!$orderid) {
            return response()->json(['success' => false, 'message' => 'orderid is required.'], 400);
        }

        $orderID_check = DB::table('orderid_gen')->where('orderid', $orderid)->count();
        $orderID_in_tns_check = DB::table('tnslog')->where('orderid', $orderid)->count();
        if ($orderID_check == 0 || $orderID_in_tns_check > 0) {
            return response()->json(['success' => false, 'message' => 'Invalid order id expired or invalid.'], 400);
        }

        $user_data = DB::table('allusers')->where('api_key', $secretKey)->first();
        if (!$user_data->categoryid) {
            return response()->json(['success' => false, 'message' => 'Category Error contact our support team.'], 500);
        }
        $allupilist = DB::table('category_level')->where('catid', $user_data->categoryid)->orderBy('leveltype', 'ASC')->get();
        if (!$allupilist) {
            return response()->json(['success' => false, 'message' => 'Category Error contact our support team.'], 500);
        }
        $allupilist = DB::table('category_level')->where('catid', $user_data->categoryid)->get();
        $all_bank_ids = DB::table('category_level')->where('catid', $user_data->categoryid)->pluck('bankid');
        $check_acive = DB::table('bankaccount')->whereIn('id', $all_bank_ids)->where('statusvalue', 1)->count();
        if ($check_acive == 0) {
            return response()->json(['success' => false, 'message' => 'No Bank activated contact our support team.'], 500);
        }
        $bankdetails = null; // Initialize bankdetails to null
        foreach ($allupilist as $i) {
            $bankq = DB::table('bankaccount')
                ->where('id', $i->bankid)
                ->where('statusvalue', 1)
                ->first();

            if ($bankq) { // Check if bankq is not null
                $limit = $bankq->targetdaily;
                $today_total_amount = DB::table('tnslog')
                    ->where('order_status', 4)
                    ->where('bank_id', $bankq->id)
                    ->where('mindate', date('Ymd'))
                    ->sum('amount');

                $total = $amount + $today_total_amount;

                if ($total <= $limit) {
                    $bankdetails = $bankq; // Store the bank details
                    break; // Exit the loop once the condition is met
                }
            }
        }

        // Check if a valid bank was found
        if ($bankdetails) {

        } else {
            // No bank met the condition
            if ($check_acive == 0) {
                return response()->json(['success' => false, 'message' => 'Bank Daily limit Error, contact our support team.'], 500);
            }
        }

        $category_data = DB::table('category')->where('id', $user_data->categoryid)->first();

        $data = array();
        $data['orderid'] = $orderid;
        $data['userid'] = $user_data->id;
        $data['amount'] = $amount;
        $data['order_status'] = 2;
        $data['cat_id'] = $user_data->categoryid;
        $data['cat_name'] = $category_data->categoryname;

        $data['bank_id'] = $bankdetails->id;
        $data['bank_name'] = $bankdetails->banknamelable;
        $data['accountname'] = $bankdetails->accountname;
        $data['upi'] = $bankdetails->upi;
        $data['bankaccountno'] = $bankdetails->bankaccountno;
        $data['targetdaily'] = $bankdetails->targetdaily;
        $data['banknamevalue'] = $bankdetails->banknamevalue;
        $data['qrimage'] = $bankdetails->qrimage;

        $data['is_clam'] = 0;
        $data['is_called'] = 0;
        $data['dateis'] = date('Y-m-d');
        $data['timeis'] = date("h:i A");
        $data['mindate'] = date('Ymd');
        $data['is_delete'] = 0;
        $data['callbackurl'] = $callbackURL;
        $data['redirecturl'] = $redirectURL;
        $data['devicetype'] = $devicetype;
        $data['note'] = $note ? $note : "";
        do {
            // Generate a random transaction ID
            $tnxid = rand(10000000000000, 99999999999999);

            // Check if the transaction ID already exists in the database
            $exists = DB::table('tnslog')->where('txnid', $tnxid)->exists();

        } while ($exists);
        $data['txnid'] = $tnxid;
        $insert = DB::table('tnslog')->insertGetId($data);
        if (!$insert) {
            return response()->json(['success' => false, 'message' => 'Internal Server Error Try Again.'], 500);
        }
        $baseUrl = env('APP_URL');
        $url = $baseUrl . '/upay/' . $tnxid;
        return response()->json(['success' => true, 'tnxid' => $tnxid, 'paymenturl' => $url], 200);
    }
    public function orderfailed(Request $req)
    {
        $tnxid = $req->tnxid;
        if (!$tnxid) {
            return response()->json(['success' => false, 'message' => 'Tnxis is required.'], 400);
        }
        $check_tnxid = DB::table('tnslog')->where('txnid', $tnxid)->count();
        if ($check_tnxid == 0) {
            return response()->json(['success' => false, 'message' => 'Invalid tnxid.'], 400);
        }
        $data = array();
        $data['order_status'] = 5;
        $data['is_called'] = 1;
        DB::table('tnslog')->where('txnid', $tnxid)->update($data);
        $this->callbackData($tnxid, "UTR_not_submitted");
        return response()->json(['success' => true, 'message' => 'Payment Success'], 200);
    }
    public function ordergetcallback($id)
    {
        $data = DB::table('tnslog')->where('txnid', $id)->first();
        if ($data->order_status == 4) {
            return $this->callbackData($id, "Success");
        } else {
            return $this->callbackData($id, "UTR_not_submitted");
        }
    }
    public function ordervarify(Request $req)
    {
        $tnxid = $req->tnxid;
        $utrid = $req->utrid;
        if (!$tnxid) {
            return response()->json(['success' => false, 'message' => 'Tnxis is required.'], 400);
        }
        // Validate TNXID and UTRID
        if (!preg_match('/^\d{12}$/', $utrid)) {
            return response()->json(['success' => false, 'message' => 'Invalid UTRID. Must be exactly 12 digits.'], 400);
        }
        $check_tnxid = DB::table('tnslog')->where('txnid', $tnxid)->count();
        if ($check_tnxid == 0) {
            return response()->json(['success' => false, 'message' => 'Invalid tnxid.'], 400);
        }
        $tdata = DB::table('tnslog')->where('txnid', $tnxid)->first();
        if ($tdata->is_called == 1) {
            return response()->json(['success' => false, 'message' => 'Invalid Transaction'], 401);
        }
        $data = array();
        $data['utr'] = $utrid;
        $data['order_status'] = 1;
        $data['is_called'] = 1;
        DB::table('tnslog')->where('txnid', $tnxid)->update($data);
        $get_tnsdata = DB::table('tnslog')->where('txnid', $tnxid)->first();
        $this->callbackData($tnxid, "Success");
        return response()->json(['success' => true, 'message' => 'Payment Success', 'redirect_url' => $get_tnsdata->redirecturl], 200);
    }
    public function callbackData($tnxid, $sts)
    {
        $get_tnsdata = DB::table('tnslog')->where('txnid', $tnxid)->first();
        $callback = array();
        $callback['_id'] = $get_tnsdata->id;
        $callback['order_id'] = $get_tnsdata->orderid;
        $callback['category'] = $get_tnsdata->cat_name;
        $callback['tnxid'] = $get_tnsdata->txnid;
        $callback['device_type'] = $get_tnsdata->devicetype;
        $callback['redirect_url'] = $get_tnsdata->redirecturl;
        $callback['callback_url'] = $get_tnsdata->callbackurl;
        $callback['utr'] = $get_tnsdata->utr;
        $callback['amount'] = $get_tnsdata->amount;
        $callback['status'] = $sts;
        $callback['isclaimed'] = $get_tnsdata->is_clam ? true : false;
        $callback['date'] = $get_tnsdata->dateis;
        $callback['time'] = $get_tnsdata->timeis;
        $in = array();
        $in['txnid'] = $tnxid;
        $in['date'] = date('Y-m-d');
        $in['time'] = date("h:i A");
        try {
            $response = Http::post($get_tnsdata->callbackurl, [
                json_decode(json_encode($callback), true)
            ]);

            if ($response->successful()) {
                DB::table('tnslog')->where('id', $get_tnsdata->id)->update(['is_callback' => 1]);
                $in['is_success'] = 1;
            } else {
                DB::table('tnslog')->where('id', $get_tnsdata->id)->update(['is_callback' => 0]);
                $in['is_success'] = 0;
            }
        } catch (\Exception $e) {
            $in['is_success'] = 0;
            DB::table('tnslog')->where('id', $get_tnsdata->id)->update(['is_callback' => 0]);
        }
        DB::table('callback_res')->insert($in);
        return json_decode(json_encode($callback), true);
    }
    public function callbackurl(Request $req)
    {
        $response = $req->input('user_data');  // Get the user data from the request
        $data['ioi'] = $response['id'];  // Extract the ID and store in $data array

        DB::table('yo')->insert($data);  // Insert the data into the 'yo' table

        return response()->json(['success' => true, 'message' => 'ID stored successfully.']);
    }
    public function checkIsadmin($userid)
    {
        $user = DB::table('allusers')->where('id', $userid)->where('role', 'admin')->count();
        if ($user > 0) {
            return true;
        } else {
            return false;
        }
    }

    // TRANSTION LOG
    public function alltransactions($userid)
    {
        $isadmin = $this->checkIsadmin($userid);
        $data = array();
        if ($isadmin) {
            $data = DB::table('tnslog')
                ->join('category', 'tnslog.cat_id', '=', 'category.id')
                ->join('allusers', 'tnslog.userid', '=', 'allusers.id')
                ->orderBy('tnslog.id', 'DESC')
                ->select(
                    'tnslog.*',
                    'category.categoryname as category_name',
                    'allusers.username as username',
                    'allusers.email as usermail'
                )
                ->get();
        } else {
            $data = DB::table('tnslog')
                ->join('category', 'tnslog.cat_id', '=', 'category.id')
                ->where('tnslog.userid', $userid)
                ->orderBy('tnslog.id', 'DESC')
                ->select(
                    'tnslog.*',
                    'category.categoryname as category_name'
                )
                ->get();
        }
        return response()->json(['success' => true, 'data' => $data]);
    }
    public function alltransactionsUnclam($userid)
    {
        $isadmin = $this->checkIsadmin($userid);
        $data = array();
        if ($isadmin) {
            $data = DB::table('tnslog')
                ->join('category', 'tnslog.cat_id', '=', 'category.id')
                ->join('allusers', 'tnslog.userid', '=', 'allusers.id')
                ->where('tnslog.is_clam', 0)
                ->orderBy('tnslog.id', 'DESC')
                ->select(
                    'tnslog.*',
                    'category.categoryname as category_name',
                    'allusers.username as username',
                    'allusers.email as usermail'
                )
                ->get();
        } else {
            $data = DB::table('tnslog')
                ->join('category', 'tnslog.cat_id', '=', 'category.id')
                ->where('tnslog.userid', $userid)
                ->where('tnslog.is_clam', 0)
                ->orderBy('tnslog.id', 'DESC')
                ->select(
                    'tnslog.*',
                    'category.categoryname as category_name'
                )
                ->get();
        }
        return response()->json(['success' => true, 'data' => $data]);
    }
    public function hourtransactions($userid)
    {
        $isadmin = $this->checkIsadmin($userid);
        $data = array();
        if ($isadmin) {
            $data = DB::table('tnslog')
                ->join('category', 'tnslog.cat_id', '=', 'category.id')
                ->where('tnslog.mindate', date('Ymd'))
                ->orderBy('tnslog.id', 'DESC')
                ->select(
                    'tnslog.*',
                    'category.categoryname as category_name'
                )
                ->get();
        } else {
            $data = DB::table('tnslog')
                ->join('category', 'tnslog.cat_id', '=', 'category.id')
                ->where('tnslog.userid', $userid)
                ->where('tnslog.mindate', date('Ymd'))
                ->orderBy('tnslog.id', 'DESC')
                ->select(
                    'tnslog.*',
                    'category.categoryname as category_name'
                )
                ->get();
        }
        return response()->json(['success' => true, 'data' => $data]);
    }
    public function change_tns_status(Request $req)
    {
        $check = DB::table('tnslog')->where('is_delete', 0)->where('id', $req->id)->count();
        if ($check > 0) {
            DB::table('tnslog')->where('id', $req->id)->update(['order_status' => $req->ststus]);
            return response()->json(['success' => true, 'message' => 'Status Updated'], 400);
        } else {
            return response()->json(['success' => false, 'message' => 'No Transaction Found'], 400);
        }
    }
    public function change_isclaim(Request $req)
    {
        $check = DB::table('tnslog')->where('id', $req->id)->first();
        DB::table('tnslog')->where('id', $req->id)->update(['is_clam' => $check->is_clam == 0 ? 1 : 0]);
        return response()->json(['success' => true, 'message' => 'Changed'], 200);    
    }
    public function uploadstetment(Request $req)
    {
        $data = array();
        $data['bankid'] = $req->bankid;
        $data['bankname'] = $req->bankname;
        $data['add_date'] = date('d-m-Y');
        $data['mindate'] = date('Ymd');
        if ($req->hasFile('stetment')) {
            $image = $req->file('stetment');
            $uniqueName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $uniqueName);
            $data['stetment'] = $uniqueName;
        }
        DB::table('stetment')->insert($data);
        return response()->json(['success' => true, 'message' => 'Uploaded Successfully'], 200);
    }
    public function stetmentlist(Request $req)
    {
        return DB::table('stetment')->where('is_delete', 0)->orderBy('id', "DESC")->get();
    }
    public function deletestetment($id)
    {
        DB::table('stetment')->where('id', $id)->update(['is_delete' => 1]);
        return true;
    }

}
