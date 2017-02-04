<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Repositories;

use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;

/**
 * Access token repository interface, included to maintain backward
 * compatibility with implementations. See Read and Write interfaces
 * for methods that need to be implemented for, respectively,
 * resource and authorization servers.
 */
interface AccessTokenRepositoryInterface
    extends RepositoryInterface, AccessTokenReadInterface, AccessTokenWriteInterface
{
}
