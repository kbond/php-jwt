<?php

namespace Zenstruck\JWT\Signer\HMAC;

use Zenstruck\JWT\Signer\HMAC;

/**
 * @author Alessandro Nadalin <alessandro.nadalin@gmail.com>
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class HS256 extends HMAC
{
    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'HS256';
    }

    /**
     * {@inheritdoc}
     */
    protected function hashingAlgorithm()
    {
        return 'sha256';
    }
}
