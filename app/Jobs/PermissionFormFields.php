<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Permission;

class PermissionFormFields extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $id, $pid;

    protected $fieldList = [
        'name' => '',
        'label' => '',
        'info' => '',
        'pid' => 0
    ];

    /**
     * Create a new job instance.
     * @param $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return resource
     */
    public function handle()
    {
        $fields = $this->fieldList;
        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        }
        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }
        $fields['pid'] = $this->pid;
        return true;
    }

    protected function fieldsFromModel($id, array $fields)
    {
        $permission = Permission::findOrFail($id);
        $fieldNames = array_keys($fields);
        //dd($fieldNames);
        foreach ($fieldNames as $field) {
            $fields[$field] = $permission->{$field};
        }
        //$fields['pid'] = $id;

        return $fields;
    }
}
