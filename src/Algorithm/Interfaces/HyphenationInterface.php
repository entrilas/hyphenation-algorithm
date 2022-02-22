<?php

declare(strict_types=1);

namespace Hyphenation\Algorithm\Interfaces;

interface HyphenationInterface
{
    public function hyphenate(string $word): string;
    public function getValidPatterns(): array;
}