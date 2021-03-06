<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Sylius\Bundle\AdminApiBundle\Model;

use FOS\OAuthServerBundle\Entity\Client as FOSClient;
use FOS\OAuthServerBundle\Model\ClientInterface;
use PhpSpec\ObjectBehavior;

final class ClientSpec extends ObjectBehavior
{
    function it_extends_fos_oauth_server_client_manager(): void
    {
        $this->shouldHaveType(FOSClient::class);
    }

    function it_implements_fos_oauth_server_client_manager_interface(): void
    {
        $this->shouldImplement(ClientInterface::class);
    }

    function it_returns_random_id_as_public_id(): void
    {
        $this->setRandomId('random_string');
        $this->getRandomId()->shouldReturn('random_string');
        $this->getPublicId()->shouldReturn('random_string');
    }
}
