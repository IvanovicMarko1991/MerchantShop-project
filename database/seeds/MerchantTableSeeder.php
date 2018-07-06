<?php

use Illuminate\Database\Seeder;

class MerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merchant=new \App\Merchant([
            'product_id'=>'1',
            'merchant'=>'E-Mag',
            'current_price'=>'500',
            'old_price'=>'550',
            'product_type'=>'SmartPhone',
            'product_name'=>'Iphone 6',
            'product_details'=>'The newest product from Apple ready to make your life easier',
            'product_specifications'=>'32 GB Memory,Dual Core Cyclone (ARM v8),1GB RAM,Retina display,Display diagonal:4.7 inch',
            'product_warranty'=>'2 years',
            'cover_image'=>'img/iphone6.jpg'
             ]);
             
             $merchant->save();

            
                     
            

                $merchant=new \App\Merchant([
                  'product_id'=>'2',
                 'merchant'=>'Media Galaxy',
                 'current_price'=>'515',
                 'old_price'=>'550',
                 'product_type'=>'SmartPhone',
                 'product_name'=>'Galaxy X',
                'product_details'=>'The newest SmartPhone from Samsung ',
              'product_specifications'=>'64 GB Memory,Dual Core Cyclone (ARM v8),2GB RAM,Retina display,Display diagonal:5.7 inch',
               'product_warranty'=>'2 years',
             'cover_image'=>'img/samsung.jpg'
                         ]);

                $merchant->save();


                $merchant=new \App\Merchant([
                    'product_id'=>'1',
                    'merchant'=>'Flamingo',
                    'current_price'=>'495',
                    'old_price'=>'530',
                    'product_type'=>'SmartPhone',
                    'product_name'=>'Iphone 6',
                    'product_details'=>'The newest product from Apple ready to make your life easier',
                    'product_specifications'=>'128 GB Memory,Dual Core Cyclone (ARM v8),2GB RAM,Retina display,Display diagonal:4.7 inch',
                    'product_warranty'=>'3 years',
                    'cover_image'=>'img/iphone6.jpg'
                     ]);

                     $merchant->save();


                     $merchant=new \App\Merchant([
                        'product_id'=>'3',
                        'merchant'=>'Media Galaxy',
                        'current_price'=>'1000',
                        'old_price'=>'1100',
                        'product_type'=>'SmartTV',
                        'product_name'=>' LED SmartTV,FULL HD',
                        'product_details'=>'The perfect SmartTV for your home ',
                        'product_specifications'=>'Resolution:1920 x 1080,HDMI Port,Wi-Fi Integrated,Diagonal:80cm',
                        'product_warranty'=>'2 years',
                        'cover_image'=>'img/lg.jpeg'
                         ]);
    
                         $merchant->save();

                         
                     $merchant=new \App\Merchant([
                        'product_id'=>'3',
                        'merchant'=>'E-Mag',
                        'current_price'=>'1150',
                        'old_price'=>'1300',
                        'product_type'=>'SmartTV',
                        'product_name'=>' LED SmartTV,FULL HD',
                        'product_details'=>'The perfect SmartTV for your home ',
                        'product_specifications'=>'Resolution:1920 x 1080,HDMI Port,Wi-Fi Integrated,Diagonal:80cm',
                        'product_warranty'=>'3 years',
                        'cover_image'=>'img/lg.jpeg'
                         ]);
    
                         $merchant->save();

                         $merchant=new \App\Merchant([
                            'product_id'=>'4',
                            'merchant'=>'Flamingo',
                            'current_price'=>'2500',
                            'old_price'=>'2750',
                            'product_type'=>'SmartTV',
                            'product_name'=>' LED SmartTV,4K',
                            'product_details'=>'The perfect SmartTV for your home ',
                            'product_specifications'=>'Resolution:1920 x 1080,HDMI Port,Wi-Fi Integrated,Diagonal:80cm',
                            'product_warranty'=>'4 years',
                            'cover_image'=>'img/lg.jpeg'
                             ]);
        
                             $merchant->save();

                

        
                         $merchant=new \App\Merchant([
                            'product_id'=>'5',
                            'merchant'=>'Media Galaxy',
                            'current_price'=>'650',
                            'old_price'=>'700',
                            'product_type'=>'Tablet',
                            'product_name'=>'Galaxy Tab E T560',
                            'product_details'=>'Meet the tablet that is going to make your life easier ',
                            'product_specifications'=>'Diagonal display:9.6 inch,Resolution:1280x800,Stocking capacity:8GB',
                            'product_warranty'=>'1 year',
                            'cover_image'=>'img/tablet.jpg'
                             ]);
        
                             $merchant->save();


                             $merchant=new \App\Merchant([
                                'product_id'=>'5',
                                'merchant'=>'E-Mag',
                                'current_price'=>'800',
                                'old_price'=>'850',
                                'product_type'=>'Tablet',
                                'product_name'=>'Galaxy Tab E T561',
                                'product_details'=>'Meet the tablet that is going to make your life easier ',
                                'product_specifications'=>'Diagonal display:10.6 inch,Resolution:1280x800,Stocking capacity:8GB',
                                'product_warranty'=>'2 years',
                                'cover_image'=>'img/tablet.jpg'
                                 ]);
            
                                 $merchant->save();            
                                         
    }
}
