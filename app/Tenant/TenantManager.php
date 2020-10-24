<?php

    namespace App\Tenant;

    class TenantManager {
        private $tenant;

        public function getTenant(){
            return $this->tenant;
        }

        public function setTenant($tenant) {
            $this->tenant = $tenant;
        }
    }
