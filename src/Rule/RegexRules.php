<?php

namespace MarkdownParser\Rule;

/**
 * @author Nádasdi Attila
 * @since 2016.11.06.
 */
class RegexRules
{
    /**
     * @var array
     */
    protected $rules = [
        '/\*{2}(.*)\*{2}/' => '<strong>$1</strong>',
        '/`(.*)`/' => '<pre>$1</pre>',
        '/_(.*)_/' => '<i>$1</i>',
        '/\!\[([^]]*)\]\(([^)]*)\)/' => '<img src="$1" alt="$2" />',
        '/\[([^]]*)\]\(([^)]*)\)/' => '<a href="$1">$2</a>'
    ];

    /**
     * @return array
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @return array
     */
    public function getPatterns()
    {
        return array_keys($this->rules);
    }

    /**
     * @return array
     */
    public function getReplacements()
    {
        return array_values($this->rules);
    }
}
