<?php
namespace App\Models;

final class TokenModel{
    /**
     *
     * @var int
     */
    private $id;
    /**
     *
     * @var string
     */
    private $token;
    /**
     *
     * @var string
     */
    private $refresh_token;
    /**
     *
     * @var string
     */
    private $expired_at;
    /**
     *
     * @var int
     */
    private $usuarios_id;

    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id): self{
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string{
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return self
     */
    public function setToken($token): self{
        $this->token = $token;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshToken(): string{
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     *
     * @return self
     */
    public function setRefreshToken($refresh_token){
        $this->refresh_token = $refresh_token;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiredAt(): string{
        return $this->expired_at;
    }

    /**
     * @param string $expired_at
     *
     * @return self
     */
    public function setExpiredAt($expired_at): self{
        $this->expired_at = $expired_at;

        return $this;
    }

    /**
     * @return int
     */
    public function getUsuariosId(): int{
        return $this->usuarios_id;
    }

    /**
     * @param int $usuarios_id
     *
     * @return self
     */
    public function setUsuariosId($usuarios_id): self{
        $this->usuarios_id = $usuarios_id;

        return $this;
    }
}