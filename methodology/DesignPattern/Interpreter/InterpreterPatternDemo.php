<?php

namespace DesignPattern\Interpreter;

/**
 * 解释器示例
 */
class InterpreterPatternDemo
{
    private function getMaleExpression()
    {
        $robert = new TerminalExpression("Robert");
        $john   = new TerminalExpression("John");
        return new OrExpression($robert, $john);
    }

    private function getMarriedWomanExpression()
    {
        $julie   = new TerminalExpression("Julie");
        $married = new TerminalExpression("Married");
        return new AndExpression($julie, $married);
    }

    public function run()
    {
        $isMale         = $this->getMaleExpression();
        $isMarriedWoman = $this->getMarriedWomanExpression();
        echo "john is male ? " . (int)$isMale->interpret("john");
        echo " Julie is a married women? " . (int)$isMarriedWoman->interpret("Married Julie");
    }
}
