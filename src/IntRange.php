<?php
namespace riccardonar;

class IntRange
{

    /**
     *
     * @var integer
     */
    private $startInt;

    /**
     *
     * @var integer
     */
    private $endInt;

    /**
     * @param integer $startInt
     * @param integer $endInt
     */
    public function __construct($startInt, $endInt)
    {
        $this->startInt = $startInt;
        $this->endInt = $endInt;
    }

    /**
     * @return integer
     */
    public function getStartInt()
    {
        return $this->startInt;
    }

    /**
     * @return integer
     */
    public function getEndInt()
    {
        return $this->endInt;
    }

    /**
     * @param IntRange $intRange
     * @return string
     */
    public static function toString(IntRange $intRange)
    {
        return sprintf('[%s,%s]', $intRange->getStartInt(), $intRange->getEndInt());
    }

    /**
     * @param $string
     * @return IntRange
     */
    public static function fromString($string)
    {
        $clean = strtr($string, ['[' => '', ']' => '', '(' => '', ')' => '']);
        list($startInt, $endInt) = explode(',', $clean);
        return new self($startInt, $endInt);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::toString($this);
    }
}
