<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BidBond;
use App\Models\BiddingResult;
use App\Models\BidDocument;
use App\Models\BusinessActivityType;
use App\Models\Employee;
use App\Models\EmployeeTask;
use App\Models\Enterprise;
use App\Models\Evaluate;
use App\Models\EvaluationCriteria;
use App\Models\FundingSource;
use App\Models\Industry;
use App\Models\ProcurementCategory;
use App\Models\Project;
use App\Models\ProjectIndustry;
use App\Models\Reputation;
use App\Models\SelectionMethod;
use App\Models\Staff;
use App\Models\Task;
use App\Models\TaskProgress;
use App\Models\WorkProgress;
use Database\Factories\IndustryFactory;
use Database\Factories\ProjectIndustryFactory;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //        $roleEnterprise = Role::where('name', 'enterprise')->get();
        //        $roleStaff = Role::where('name', 'staff')->get();
        //
        //        // Tạo 5000 Enterprise và gán quyền cho mỗi User liên kết
        //        Enterprise::factory(5000)->create()->each(function ($enterprise) use ($roleEnterprise) {
        //            $enterprise->user->assignRole($roleEnterprise); // Gán role enterprise cho user của enterprise
        //        });
        //
        //        // Tạo 200 Staff và gán quyền cho mỗi User liên kết
        //        Staff::factory(200)->create()->each(function ($staff) use ($roleStaff) {
        //            $staff->user->assignRole($roleStaff); // Gán role staff cho user của staff
        //        });

        //        $methods = [
        //            'Đấu thầu rộng rãi',
        //            'Đấu thầu hạn chế',
        //            'Đấu thầu trực tuyến',
        //            'Đấu thầu cạnh tranh',
        //            'Đấu thầu không cạnh tranh',
        //            'Đấu thầu theo hình thức thương thảo',
        //        ];
        //
        //        foreach ($methods as $method) {
        //            SelectionMethod::factory()->create([
        //                'method_name' => $method,
        //            ]);
        //        }
        //        ProcurementCategory::factory(100)->create();
        //        BusinessActivityType::factory(100)->create();
        //        Industry::factory(1000)->create();
        //        FundingSource::factory(10000)->create();
        // BiddingResult::factory(200)->create();
        // $biddingResults = BiddingResult::select('project_id', 'enterprise_id')->get();
        // fake Evaluate
        // foreach ($biddingResults as $result) {
        //     Evaluate::factory()->create([
        //         'project_id' => $result->project_id,
        //         'enterprise_id' => $result->enterprise_id,
        //     ]);
        // }

        $batchSize = 1000;
        $totalRecords = 2000;

        for ($i = 0; $i < $totalRecords; $i += $batchSize) {
            // BiddingResult::factory($batchSize)->create();
            // ProjectIndustry::factory($batchSize)->create();
            // Project::factory($batchSize)->create(); // done
            // EvaluationCriteria::factory($batchSize)->create(); // done
            // BidBond::factory($batchSize)->create();  // cần = số lượng project - 1k
            // BidDocument::factory($batchSize)->create();  // cần = số lượng project - done
            // Employee::factory($batchSize)->create(); // fake 50k - done
            // Task::factory($batchSize)->create(); // 100k - done
            // EmployeeTask::factory($batchSize)->create(); // 5k - done
            // Reputation::factory($batchSize)->create();
            // WorkProgress::factory($batchSize)->create();
            // TaskProgress::factory($batchSize)->create();
        }
    }
}
