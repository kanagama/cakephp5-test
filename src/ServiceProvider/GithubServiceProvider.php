<?php
declare(strict_types=1);

namespace App\ServiceProvider;

use App\Utility\Github\User\User;
use App\Utility\Github\User\UserInterface;
use App\Utility\Github\ListPull\ListPull;
use App\Utility\Github\ListPull\ListPullInterface;
use App\Utility\Github\RateLimit\RateLimit;
use App\Utility\Github\RateLimit\RateLimitInterface;
use Cake\Core\ContainerInterface;
use Cake\Core\ServiceProvider;

/**
 * @author k-nagama <k-nagama@se-ec.co.jp>
 */
class GithubServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected array $provides = [
        User::class,
        UserInterface::class,

        ListPull::class,
        ListPullInterface::class,

        RateLimit::class,
        RateLimitInterface::class,
    ];

    /**
     * @param  ContainerInterface  $container
     */
    public function services(ContainerInterface $container): void
    {
        $container->add(UserInterface::class, User::class);
        $container->add(ListPullInterface::class, ListPull::class);
        $container->add(RateLimitInterface::class, RateLimit::class);
    }
}
