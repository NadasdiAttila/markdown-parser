<?php

namespace MarkdownParser\Parser;

use MarkdownParser\Rule\RegexRules;

/**
 * @author Nádasdi Attila
 * @since 2016.11.06.
 */
class RegexParser
{
    /**
     * @var RegexRules
     */
    protected $rules;

    /**
     * RegexParser constructor.
     * @param RegexRules $rules
     */
    public function __construct(RegexRules $rules)
    {
        $this->rules = $rules;
    }

    /**
     * @param string $filePath
     * @return string
     * @throws \Exception
     */
    public function parseFile($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \Exception('File is not exists.');
        }
        $fileContent = file_get_contents($filePath);

        if ($fileContent === false) {
            throw new \Exception('File is not readable.');
        }
        return $this->parse($fileContent);
    }

    /**
     * @param string $text
     * @return mixed
     */
    public function parse($text)
    {
        return preg_replace($this->rules->getPatterns(), $this->rules->getReplacements(), $text);
    }
}
