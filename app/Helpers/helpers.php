<?php
  
if (! function_exists('calculateBMI')) {
    function calculateBMI($user) {
        $BMIValue = $user->weight / (($user->height * 0.01)^2);

        $BMIMessage = '';
        $BMIStatus = '';
        $BMIImage = '';

        if($BMIValue < 18.5) {
            $BMIMessage = 'You are underweight';
            $BMIStatus = 'underweight';
            $BMIImage = asset('/assets/images/BMI/under_weight.png');
        } 
        else if($BMIValue >= 18.5 && $BMIValue < 24.9 ) {
            $BMIMessage = 'You have normal weight';
            $BMIStatus = 'normalweight';
            $BMIImage = asset('/assets/images/BMI/normal.png');
        }
        else if($BMIValue >= 25.0 && $BMIValue < 29.9 ) {
            $BMIMessage = 'You are overweight';
            $BMIStatus = 'overweight';
            $BMIImage = asset('/assets/images/BMI/overweight.png');
        }
        else if($BMIValue >= 30.0 ) {
            $BMIMessage = 'You are in obese range';
            $BMIStatus = 'obese';
            $BMIImage = asset('/assets/images/BMI/obese.png');
        }

        $tips = getTips($BMIStatus);

        $BMIData = [
            'value' => (int) $BMIValue,
            'message' => $BMIMessage,
            'status' => $BMIStatus,
            'image' => $BMIImage,
            'tips' => $tips
        ];

        return $BMIData;
    }

    function getTips($status) {
        $tipsHeader = '';
        $tipsList = [];

        if($status == 'underweight') {
            $tipsHeader = "Although being lean can often be healthy, being underweight can be a concern if it's the result of poor nutrition or if you are pregnant or have other health concerns. So, if you're underweight, see your doctor or dietitian for an evaluation. Together, you can plan how to meet your goal weight.Here are some healthy ways to gain weight when you're underweight:";

            $tipsList = [
                [
                    "title" => "Eat more frequently.",
                    "description" => "When you're underweight, you may feel full faster. Eat five to six smaller meals during the day rather than two or three large meals."
                ],
                [
                    "title" => "Choose nutrient-rich foods.",
                    "description" => " As part of an overall healthy diet, choose whole-grain breads, pastas and cereals; fruits and vegetables; dairy products; lean protein sources; and nuts and seeds."
                ],
                [
                    "title" => "Try smoothies and shakes",
                    "description" => "Don't fill up on diet soda, coffee and other drinks with few calories and little nutritional value. Instead, drink smoothies or healthy shakes made with milk and fresh or frozen fruit, and sprinkle in some ground flaxseed. In some cases, a liquid meal replacement may be recommended."
                ],
                [
                    "title" => "Watch when you drink. ",
                    "description" => "Some people find that drinking fluids before meals blunts their appetite. In that case, it may be better to sip higher calorie beverages along with a meal or snack. For others, drinking 30 minutes after a meal, not with it, may work."
                ],
                [
                    "title" => "Make every bite count.",
                    "description" => "Snack on nuts, peanut butter, cheese, dried fruits and avocados. Have a bedtime snack, such as a peanut butter and jelly sandwich, or a wrap sandwich with avocado, sliced vegetables, and lean meat or cheese."
                ],
                [
                    "title" => "Top it off",
                    "description" => "Add extras to your dishes for more calories — such as cheese in casseroles and scrambled eggs, and fat-free dried milk in soups and stews."
                ],
                [
                    "title" => "Have an occasional treat.",
                    "description" => "Even when you're underweight, be mindful of excess sugar and fat. An occasional slice of pie with ice cream is OK. But most treats should be healthy and provide nutrients in addition to calories. Bran muffins, yogurt and granola bars are good choices."
                ],
                [
                    "title" => "Exercise.",
                    "description" => "Exercise, especially strength training, can help you gain weight by building up your muscles. Exercise may also stimulate your appetite."
                ]
            ];
        } else {
            return false;
        }

        $data = [
            'tipsHeader' => $tipsHeader,
            'tipsList' => $tipsList
        ];
        
        return $data;
    }
}

?>