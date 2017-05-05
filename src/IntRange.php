<?php
namespace riccardonar;

class IntRange
{

    /**
     *
     * @var integer
     */
    private $start;

    /**
     *
     * @var integer
     */
    private $end;

    /**
     * @param integer $start
     * @param integer $end
     */
    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return integer
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return integer
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param IntRange $intRange
     * @return string
     */
    public static function toString(IntRange $intRange)
    {
        return sprintf('[%s,%s]', $intRange->getStart(), $intRange->getEnd());
    }

    /**
     * @param $string
     * @return IntRange
     */
    public static function fromString($string)
    {
        $clean = strtr($string, ['[' => '', ']' => '', '(' => '', ')' => '']);
        list($start, $end) = explode(',', $clean);
        return new self($start, $end);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::toString($this);
    }
}
