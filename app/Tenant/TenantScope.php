<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope {
    public function apply(Builder $builder, Model $model) {
        /** @var User $tenant */
        $tenant = \Tenant::getTenant();
        if($tenant && $tenant->role != 1) {
            $unity_id = $tenant->unity_id;
            $builder->where('unity_id', $unity_id);
        }
    }
}
