<?php
namespace TYPO3\CMS\Extbase\Tests\Unit\Reflection;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Reflection\DocCommentParser;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class DocCommentParserTest extends UnitTestCase
{
    /**
     * @test
     */
    public function stripsSlashFromMethodComment()
    {
        $commentParser = new DocCommentParser();
        $comment = '/**
 * Here is some text, but neither an argument nor a return type.
 */
';
        $commentParser->parseDocComment($comment);
        $this->assertSame(
            'Here is some text, but neither an argument nor a return type.',
            $commentParser->getDescription()
        );
    }
}
