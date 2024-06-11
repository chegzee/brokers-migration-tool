<?php

class SqlQuery{
     protected $query = null;
        
        const LOREM = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        const PASSWORD_COMPLEXITY = 'Between 8 and 128 characters long. Use at least the following types of characters: (a) uppercase letters, (b) lowercase letters, (c) numbers, and (d) special characters';
        
        public $column_int = array('val', 'password_attempt', 'user_period', 'agent_prop', 'agent_prop2', 'agent_prop3', 'range_min', 'range_max');
        public $column_float = array('debit', 'credit', 'currency_rate', 'premium_rate', 'com_rate', 'vat_rate', 'loss_amount', 'paid_amount', 'claim_paid', 'bus_prop', 'sum_insured', 'gross_premium', 'commission', 'vat_amount', 'other_charge', 'amount', 'net_amount', 'prop_sum_insured', 'prop_gross_premium', 'prop_deduction', 'prop_net_amount', 'amt_received', 'premium_rate', 'min_insured', 'max_insured');
        public function getQuery($arg = array()){
    
            //return gettype($arg['array'][0]);
            //
            if (!is_array($arg['array'])) return "Data not specified";
            //
            else if (!is_object($arg['array'][0])) return "Data[0] not Object";
            //
            else if (!in_array($arg['action'], array('INSERT', 'UPDATE'))) return "Insert/update not specified";
            //
            else if (!is_array($arg['fields'])) return "Fields not specified";
            //
            else if (!is_string($arg['table'])) return "Database table not specified";
    
            //
            if (strtoupper($arg['action']) == 'INSERT') {
                $insert = $values = "";
                foreach ($arg['fields'] as $key) {
                    $insert .= ", `" . $key . "`";
                }
    
                //
                $values = "";
                foreach ($arg['array'] as $val) {
                    if (is_object($val)) {
                        $value = "";
                        foreach ($arg['fields'] as $key) {
                            $value .= ", '" . addslashes($val->{$key} ?? '') . "'";
                        }
                        $values .= ", (" . substr($value, 2) . ")";
                    }
                }
    
                // additional
                if ($arg['option'] == 'ADD')
                    $sql = ", " . str_ireplace('\'NULL\'', "NULL", substr($values ?? '', 2));
                else
                    $sql = "INSERT INTO " . $arg['table'] . " (" . substr($insert, 2) . ") VALUES " . str_ireplace('\'NULL\'', "NULL", substr($values, 2));
            } //
            else if (strtoupper($arg['action']) == 'UPDATE') {
                $update = "";
                foreach ($arg['fields'] as $key) {
                    $update .= ", `" . $key . "` = '" . addslashes($arg['array'][0]->{$key} ?? '') . "'";
                }
    
                $sql = "UPDATE " . $arg['table'] . " SET " . str_ireplace('\'NULL\'', "NULL", substr($update, 2));
                if (!empty($arg['option']))
                    $sql .= " " . $arg['option'];
            } //
            else {
                $sql = "Unknown error";
            }
    
            $this->query = str_ireplace('\'\'', "NULL", str_ireplace('\\\\', '\\', str_ireplace('\\\\', '\\', str_ireplace('\"', '\'', str_ireplace('\'', '\"', $sql)))));
            return $this->query;
    }

}