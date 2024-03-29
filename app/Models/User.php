<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * USER  ATTRIBUTES
     * $this->attribute['id'] - int contains the user primary key
     * $this->attribute['name'] - string contains the user name
     * $this->attribute['email'] - string contains the user email
     * $this->attribute['email_verified_at'] - timestamp contains the user email verification date
     * $this->attribute['password'] - string contains the user password
     * $this->attribute['remember_token'] - string contains the user password
     * $this->attribute['role'] - string contains the user role (client or admin)
     * $this->attribute['balance'] - int contains the user balance
     * $this->attribute['created_at'] - timestamp contains the user creation date
     * $this->attribute['updated_at'] - timestamp contains the user update date
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
    ];

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName() {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getEmail() {
        return $this->attributes['email'];
    }
    public function setEmail($email) {
        $this->attributes['email'] = $email;
    }
    public function getPassword() {
        return $this->attributes['password'];
    }
    public function setPassword($password) {
        $this->attributes['password'] = $password;
    }
    public function getRole() {
        return $this->attributes['role'];
    }
    public function setRole($role) {
        $this->attributes['role'] = $role;
    }
    public function getBalance() {
        return $this->attributes['balance'];
    }
    public function setBalance($balance) {
        $this->attributes['balance'] = $balance;
    }
    public function getCreatedAt() {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt) {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt() {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt) {
        $this->attributes['updated_at'] = $updatedAt;
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
