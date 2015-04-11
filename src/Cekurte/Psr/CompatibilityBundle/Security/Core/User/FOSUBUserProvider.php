<?php

namespace Cekurte\Psr\CompatibilityBundle\Security\Core\User;

use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class FOSUBUserProvider extends BaseClass
{
    /**
     * @inheritdoc
     */
    public function connect(UserInterface $user, UserResponseInterface $response)
    {
        $property       = $this->getProperty($response);
        $username       = $response->getUsername();

        $service        = $response->getResourceOwner()->getName();

        $setter         = 'set'     . ucfirst($service);

        $setter_id      = $setter   . 'Id';
        $setter_token   = $setter   . 'AccessToken';

        if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
            $previousUser->{$setter_id}(null);
            $previousUser->{$setter_token}(null);
            $this->userManager->updateUser($previousUser);
        }

        $user->{$setter_id}($username);
        $user->{$setter_token}($response->getAccessToken());

        $this->userManager->updateUser($user);
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $username    = $response->getUsername();

        $user        = $this->userManager->findUserBy(array($this->getProperty($response) => $username));

        $serviceName = ucfirst($response->getResourceOwner()->getName());

        if (null === $user) {

            $setter         = 'set'     . $serviceName;

            $setter_id      = $setter   . 'Id';
            $setter_token   = $setter   . 'AccessToken';

            $user = $this->userManager->createUser();

            $user->{$setter_id}($username);
            $user->{$setter_token}($response->getAccessToken());

            $user->setUsername($username);
            $user->setEmail($response->getEmail());
            $user->setPassword($username);
            $user->setEnabled(true);
            $user->setRoles(array('ROLE_USER'));

            $this->userManager->updateUser($user);

            return $user;
        }

        $user = parent::loadUserByOAuthUserResponse($response);

        $setter = 'set' . $serviceName . 'AccessToken';

        $user->{$setter}($response->getAccessToken());

        return $user;
    }
}