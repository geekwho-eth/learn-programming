<?php

/**
 * @Author: GeekWho
 * @Date:   2018-12-14 17:48:03
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2018-12-14 18:36:41
 */
namespace Algorithm\Sort;

class BubbleSortTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $tests = [
            'case1' => [
                'input' => [
                    'nums'   => [50,63,99,39,16,22,70,77,90,33],
                ],
                'output' => [16,22,33,39,50,63,70,77,90,99],
            ],
            'case2' => [
                'input' => [
                    'nums'   => [25,57,5,76,68,72,30,83,22,3],
                ],
                'output' => [3,5,22,25,30,57,68,72,76,83],
            ]
        ];
        foreach ($tests as $key => $case) {
            $input  = $case['input'];
            $output = $case['output'];
            $return = (new \Algorithm\Sort\BubbleSort())->run($input['nums']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
            $return = (new \Algorithm\Sort\BubbleSort())->run1($input['nums']);
            $this->assertEquals(
                true,
                $return == $output,
                "run test $key failed."
            );
        }

        $debug = false;
        if($debug){
            (new \Algorithm\Sort\BubbleSort)->sort();
            (new \Algorithm\Sort\BubbleSort)->sort1();
            /*
             //1000
            (new \Algorithm\Sort\BubbleSort)->sort(1000);
            //10000
            (new \Algorithm\Sort\BubbleSort)->sort(10000);
            //10,0000
            (new \Algorithm\Sort\BubbleSort)->sort(100000);
            */
        }
    }
}
