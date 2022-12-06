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
        } 
        else if($status == 'normalweight') {
            $tipsHeader = "Losing weight is never easy but it is definitely worth it. Maintaining a healthy weight helps your body to function better, limiting the chance of future disease and discomfort. Despite the flashy headlines you see on magazine covers and internet ads, most lose-weight-fast schemes don’t work because they can’t help you keep the weight off. There isn’t a secret to losing weight, but there are a couple of things you can do to maintain a healthy lifestyle.";
            $tipsList = [
                [
                    "title" => "Watch your portion sizes",
                    "description" => "Eating smaller portions can help you to avoid eating too much food and allow you to include more of the foods you love into your daily life. The American Heart Association reminds people that portion sizes are different than serving sizes, and you can learn more about the differences between the two here."
                ],
                [
                    "title" => "Eat good foods",
                    "description" => "Foods high in sugar and calories lead to weight gain if you are not careful. Choose foods that are high in nutrition and taste, like fruits, vegetables and whole grains. You don’t have to sacrifice your favorite foods in order to take care of your body either–it’s ok to have a couple of cheat meals or cheat days every once in a while."
                ],
                [
                    "title" => "Drink more water",
                    "description" => "Drinking water, along with eating good foods and exercising daily, can help you to maintain a healthy weight. According to the Obesity Society, drinking water on a daily basis can also shrink your waistline and change your body fat percentage over time. "
                ],
                [
                    "title" => "Track what you eat",
                    "description" => "Many people are unaware of exactly how many calories they consume, which is why it’s important to track and monitor the total calories you eat and drink each day. If you want to lose weight, you must burn more calories than you eat or drink. Visit the Dietary Guidelines for Americans 2015-2020 chart to see how many calories you need to eat to maintain or lose weight."
                ],
                [
                    "title" => "Exercise daily",
                    "description" => "Your body weight is affected by the amount of energy you take in and the amount you use. If you want to maintain your current body weight, you will need to use as much energy as you consume; to lose weight, you need to use more energy than you consume. Find a good exercise program that includes both cardio and strength training. The benefits of daily exercise are more than just keeping your body weight in check; exercise also builds muscle, strengthens your heart and helps your body to function at its best."
                ],
                [
                    "title" => "Get more sleep",
                    "description" => "Getting a good amount of sleep every night helps to reset your body, preparing it for the next day. According to the National Institutes of Health, those who don’t get enough sleep often tend to eat more food than they need as a way to stay awake. Make time every day to get enough sleep. Doing so will help you function better throughout the day, and keep you from eating extra. If you have trouble sleeping, find ways to relax your body like yoga, reading or stretching."
                ],
                [
                    "title" => "Make a goal and stick to it",
                    "description" => "To accomplish any goal, you need to know where you currently are. Find out your Body Mass Index (BMI) and come up with a plan to stay in the healthy category. If you need some help, you can visit your family doctor or another healthcare provider for advice. It is better to start with small, short-term goals that you know you will be able to accomplish. Doing so will help you to stay on track toward your long-term goals."
                ],
            ];
        }
        else if($status == 'overweight') {
            $tipsHeader = "Over the years, you’ve probably heard your fair share of wacky weight loss advice, whether it’s to drink celery juice every day or replace your meals with weight loss “cookies.” And often those tips are promoted by people without any health expertise.";
            $tipsList = [ 
                [
                    "title" => "Eat Slowly",
                    "description" => "“I have my clients learn how to choose foods they like, really taste each morsel going into their mouths, and chew deliberately. I advise them to chew slowly, swallow only when the food is all chewed up, and repeat. It takes time to know we're full. Eating slowly not only allows us to enjoy our food more but gives us better cues of satiety.” — Janet Zinn, a licensed clinical social worker and psychotherapist in private practice in New York City"
                ],
                [
                    "title" => "Enjoy the Food You Eat",
                    "description" => "“So often we’re told what to eat, and then when we don’t like that specific food, we’re less apt to create long-term healthy habits. Try new fruits and vegetables. Find out how to prepare new dishes that provide variety and flavor. Add herbs and spices to elevate flavor. Or if you prefer, savor the sweetness of fruit and the depth of raw and steamed vegetables. There’s no reason that your relationship with food can’t be pleasurable.” — Zinn"
                ],
                [
                    "title" => "Keep a Daily Gratitude Journal",
                    "description" => "“Our eating habits are sometimes connected to our emotions, whether we realize it or not. When we're stressed, we may use food to help cope with the stress. I work with clients on keeping a daily journal of things they're grateful for — or even just a journal to write in when stressed — so that they're better prepared to cope with the stress by acknowledging it and utilizing other tools, rather than reaching for food as a coping mechanism.” — Lauren Manganiello, RDN, a yoga instructor on Long Island, New York"
                ],
                [
                    "title" => "Batch Cook and Prep",
                    "description" => "“Every Sunday I batch cook enough chicken for the week. I cut off the fat, bake it with seasoning, measure 3.5 ounces, and put that much into a container with some mustard and frozen veggies, so I can grab one a day to bring to work. I also take the time to divvy up in individual containers ¼ cup of rolled oats, 1 tablespoon each of natural peanut butter and ground flax, and a pinch each of protein powder and cinnamon to sweeten. So when I’m a zombie in the morning, all I need to do is add water and microwave!” — Kyra Williams, a personal trainer in Boston"
                ],
                [
                    "title" => "Don’t Forget the Weights",
                    "description" => "“Make sure you are lifting weights two or three times a week. Using moderate to heavy weights — three or four sets of 10 to 15 reps with weights that challenge you — helps increase your muscle mass. When you have more muscle on your body, the food you eat is more likely to be utilized as fuel, rather than be stored as fat.” — Williams"
                ],
                [
                    "title" => "Stay Hydrated",
                    "description" => "“Research has found that people who drank two glasses of water before a meal lost more weight than people who didn’t drink water before meals — and they kept it off. This simple tip works in two ways. Thirst can mask itself as hunger, causing you to eat more. And water makes you feel fuller, causing you to eat less during a meal.” — Megan Casper RDN, a nutrition counselor and the founder and CEO of Nourished Bite"
                ],
                [
                    "title" => "Cut Calories, Not Flavor",
                    "description" => "“By choosing options such as sharp cheddar over mild cheddar, you can use less, but you’ll still get a lot of flavor without feeling like you're on a diet.” — Casper"
                ],
                [
                    "title" => "Cut Calories, Not Flavor",
                    "description" => "“By choosing options such as sharp cheddar over mild cheddar, you can use less, but you’ll still get a lot of flavor without feeling like you're on a diet.” — Casper"
                ],
            ];
        }
        else if($status == 'obese') { 
            $tipsHeader = "Many of these obesity prevention tips are the same for losing or maintaining a healthy weight. The bottom is line that eating a healthy diet and getting more physical activity can help prevent obesity.";
            $tipsList = [
                [
                    "title" => "Consume less “bad” fat and more “good” fat",
                    "description" => "Contrary to the belief behind the low-fat diet craze of the ’90s, not all fat is bad. ATrusted Source 2017 studyTrusted Source published in the Nutrition Journal showed that intake of healthy dietary fats, such as polyunsaturated fats, can improve cholesterol levels and reduce obesity risk."
                ],
                [
                    "title" => "Consume less processed and sugary foods",
                    "description" => "According to a 2016 studyTrusted Source published in The American Journal of Clinical Nutrition,consumption of processed and ultra-processed foods is linked to a higher risk of obesity. Many processed foods are high in fat, salt, and sugar, which can encourage overeating."
                ],
                [
                    "title" => "Eat more servings of vegetables and fruits",
                    "description" => "The daily recommendation for fruit and vegetable intake is five to nine servings per day for adults. Filling your plate with veggies and fruit can help keep calories reasonable and reduce the risk of overeating"
                ],
                [
                    "title" => "Eat plenty of dietary fiber",
                    "description" => "Studies continue to show that dietary fiber plays a role in weight maintenance. One 2012 trialTrusted Source found that people who took a fiber complex supplement three times daily for 12 weeks lost up to 5 percent of their body weight."
                ],
                [
                    "title" => "Focus on eating low–glycemic index foods",
                    "description" => "The glycemic index (GI) is a scale used to measure how quickly a food item will raise your blood sugar. Focusing on low-GI foods can help keep blood sugar levels steadier. Keeping your blood glucose levels steady can help with weight management."
                ],
                [
                    "title" => "Get the family involved in your journey",
                    "description" => "Social support isn’t just for children and teens — it’s important for adults to feel supported too. Whether cooking with family or going on walks with friends, getting people involved can help to encourage a healthy lifestyle."
                ],
                [
                    "title" => "Engage in regular aerobic activity",
                    "description" => "Incorporating regular physical activity into your schedule is important for maintaining or losing weight, among other benefits. The CDCTrusted Source recommends 150 minutes of moderate aerobic activity or 75 minutes of vigorous aerobic activity per week."
                ],
                [
                    "title" => "Incorporate a weight training regimen",
                    "description" => "Weight training is just as important to weight maintenance as aerobic activity. In addition to weekly aerobic activity, the WHO recommends weight training that involves all your major muscles at least two times per week."
                ],
                [
                    "title" => "Focus on reducing daily stress",
                    "description" => "Stress can have many effects on the body and mind. A 2012 studyTrusted Source suggests that stress may trigger a brain response that changes eating patterns and leads to cravings for high-calorie foods. Eating too many high-calorie foods can contribute to the development of obesity."
                ],
            ];
        }   
        else {
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