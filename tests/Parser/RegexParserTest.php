<?php

namespace MarkdownParser\Parser;

use MarkdownParser\Rule\RegexRules;

/**
 * @author Nádasdi Attila
 * @since 2016.11.06.
 */
class RegexParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RegexParser
     */
    protected $parser;

    /**
     * @var RegexRules
     */
    protected $rules;

    protected function setUp()
    {
        $this->rules = $this->getMockBuilder(RegexRules::class)
            ->getMock();
        $this->parser = new RegexParser($this->rules);
    }

    /**
     * @covers \MarkdownParser\Parser\RegexParser::__construct
     */
    public function testConstruct()
    {
        $this->assertSame($this->rules, $this->readAttribute($this->parser, 'rules'));
    }
}
