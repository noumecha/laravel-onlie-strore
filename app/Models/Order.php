<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * ORDER ATTRIBUTES
     * $this->attributes['id']
     * $this->attributes['user_id']
     * $this->attributes['total']
     * $this->attributes['created_at']
     * $this->attributes['updated_at']
     * $this->attributes['updated_at']
     * $this->user User contains the associated user
     * $this->item Item contains the associated item
     */

    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->attributes['id'];
    }

    /**
     * @inheritdoc
     */
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    /**
     * @inheritdoc
     */
    public function getUserId() {
        return $this->attributes['user_id'];
    }

    /**
     * @inheritdoc
     */
    public function setUserId($userId) {
        $this->attributes['user_id'] = $userId;
    }

    /**
     * @inheritdoc
     */
    public function getTotal() {
        return $this->attributes['total'];
    }

    /**
     * @inheritdoc
     */
    public function setTotal($total) {
        $this->attributes['total'] = $total;
    }

    /**
     * @inheritdoc
     */
    public function getCreatedAt() {
        return $this->attributes['created_at'];
    }

    /**
     * @inheritdoc
     */
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    /**
     * @inheritdoc
     */
    public function getUpdatedAt() {
        return $this->attributes['updated_at'];
    }

    /**
     * @inheritdoc
     */
    public function setUpdatedAt($updatedAt) {
        $this->attributes['updated_at'] = $updatedAt;
    }

    /**
     * @inheritdoc
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * @inheritdoc
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @inheritdoc
     */
    public function setUser($user) {
        $this->user = $user;
    }

    /**
     * @inheritdoc
     */
    public function items() {
        return $this->hasMany(Item::class);
    }

    /**
     * @inheritdoc
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function setItems($items) {
        $this->items = $items;
    }

    /**
     * @inheritdoc
     */
    public function validate($request) {
        $request->validate([
            'total' => 'required|numeric',
            'user_id' => 'required|exists:users,id'
        ]);
    }
}
