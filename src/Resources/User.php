<?php

namespace Larva\Forge\Resources;

class User extends Resource
{
    /**
     * The id of the user.
     *
     * @var int
     */
    public $id;

    /**
     * The name of the user.
     *
     * @var string
     */
    public $name;

    /**
     * The username of the user.
     *
     * @var string
     */
    public $username;

    /**
     * The E-Mail of the user.
     *
     * @var string
     */
    public $email;

    /**
     * The phone of the user.
     *
     * @var string
     */
    public $phone;

    /**
     * The avatar of the user.
     *
     * @var string
     */
    public $avatar;

    /**
     * The gender of the user.
     *
     * @var string
     */
    public $gender;

    /**
     * The birthday of the user.
     *
     * @var string
     */
    public $birthday;

    /**
     * The website of the user.
     *
     * @var string
     */
    public $website;

    /**
     * The intro of the user.
     *
     * @var string
     */
    public $intro;

    /**
     * The bio of the user.
     *
     * @var string
     */
    public $bio;

    /**
     * The invite code of the user.
     *
     * @var string
     */
    public $invite_code;

    /**
     * The register time of the user.
     *
     * @var string
     */
    public $register_time;

    /**
     * 修改密码
     */
    public function modifyPassword($oldPassword, $newPassword)
    {
        return $this->forge->post('/api/v1/user/password', [
            'old_password' => $oldPassword,
            'password' => $newPassword
        ]);
    }

    /**
     * 修改个人资料
     */
    public function modifyProfile($data = [])
    {
        return $this->forge->post('/api/v1/user/profile', $data);
    }

    /**
     * 修改邮箱
     */
    public function modifyEmail($newEmail, $verify_code)
    {
        return $this->forge->post('/api/v1/user/email', [
            'email' => $newEmail,
            'verify_code' => $verify_code
        ]);
    }

    /**
     * 修改手机号
     */
    public function modifyPhone(string $newPhone, string $verify_code)
    {
        return $this->forge->post('/api/v1/user/phone', [
            'phone' => $newPhone,
            'verify_code' => $verify_code
        ]);
    }

    /**
     * 修改用户名
     * @param string $username
     */
    public function modifyUsername(string $username)
    {
        return $this->forge->post('/api/v1/user/username', [
            'username' => $username
        ]);
    }
}
