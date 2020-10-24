<?php

namespace App\Tenant;

trait TenantModels {
    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new TenantScope());

        static::creating(function($model){
            /** @var User $tenant */
            $tenant = \Tenant::getTenant();
            if($tenant) {
                $unity_id = $tenant->unity_id;
                $model->unity_id = $unity_id;
            }
        });
    }
}
