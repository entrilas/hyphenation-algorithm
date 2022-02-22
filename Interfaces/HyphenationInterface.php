<?php

namespace Hyphenation\Interfaces;

interface HyphenationInterface
{
    public function hyphenate(string $word): string;
    public function getValidPatterns(): array;
}