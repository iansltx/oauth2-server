<?php

namespace League\OAuth2\Server\Repositories;

interface AccessTokenReadInterface
{
    /**
     * Check if the access token has been revoked.
     *
     * @param string $tokenId
     *
     * @return bool Return true if this token has been revoked
     */
    public function isAccessTokenRevoked($tokenId);
}