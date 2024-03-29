<?php
declare(strict_types=1);

namespace App\Utility\Github\RateLimit\ValueObject;

/**
 * @property-read int $limit
 * @property-read int $used
 * @property-read int $remaining
 * @property-read int $reset
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class SourceImport
{
    /**
     * @param int $limit
     * @param int $used
     * @param int $remaining
     * @param int $reset
     */
    public function __construct(
        public readonly int $limit,
        public readonly int $used,
        public readonly int $remaining,
        public readonly int $reset,
    ) {
    }
}
