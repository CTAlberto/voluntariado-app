<?php
namespace App\Models;
require __DIR__ . '/Model.php';
class Opportunities extends Model
{
    protected $table = 'volunteeropportunities';
    protected $id;
    protected $tittle;
    protected $description;
    protected $requirements;
    protected $duration;
    protected $status;
    protected $provider_user_id;
    protected $created_at;
    protected $image_url;

    public function __construct()
    {
        parent::__construct();
    }

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTittle()
    {
        return $this->tittle;
    }

    public function setTittle($tittle)
    {
        $this->tittle = $tittle;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getRequirements()
    {
        return $this->requirements;
    }

    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getProviderUserId()
    {
        return $this->provider_user_id;
    }

    public function setProviderUserId($provider_user_id)
    {
        $this->provider_user_id = $provider_user_id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getImageUrl()
    {
        return $this->image_url;
    }

    public function setImageUrl($image_url)
    {
        $this->image_url = $image_url;
    }
}