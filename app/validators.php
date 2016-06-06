<?php
Validator::extend('alpha_num_spaces', function($attribute, $value)
{
    return preg_match('/^[a-zA-Z0-9 ]*$/', $value);
});

Validator::extend('alpha_spaces', function($attribute, $value)
{
    return preg_match('/^[a-zA-Z ]*$/', $value);
});