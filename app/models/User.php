<?php

use Zizaco\Entrust\HasRole;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface{

	use HasRole;
	use UserTrait, RemindableTrait;

	protected $table = 'p_kullanicilar';
}