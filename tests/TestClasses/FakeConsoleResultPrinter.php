<?php

namespace Permafrost\RayScan\Tests\TestClasses;

use Permafrost\PhpCodeSearch\Results\SearchResult;
use Permafrost\RayScan\Printers\ConsoleResultPrinter;

class FakeConsoleResultPrinter extends ConsoleResultPrinter
{
    public function print($output, SearchResult $result, bool $colorize = true, bool $printSnippets = true)
    {
        $result->file()->filename = str_replace(realpath(__DIR__ . '/../..'), '', $result->file()->getRealPath());

        parent::print($output, $result, $colorize, $printSnippets);
    }
}
