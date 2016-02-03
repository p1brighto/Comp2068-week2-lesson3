  /*
  Project: Coffee Cool
  It is a simple project created using Arduino. In this project I created a device which let us know when we can dink the coffee.
  
  Parts of this device includes a Buzzer, Two LEDs (Green & Red), 16 x 2 LCD Keypad, Temperature sensor Shield and an Arduino. 
  
  When the temperature is apt for drinking coffee the LCD will display a message “Have the coffee"
  and if the temperature is too high it show "Coffee! too hot", in addition a buzzer will sound to give a warning.
  
  Moreover, the LEDs will glow on the following pattern:
  
  RED, GREEN- Apt for drinking
  RED Flicker- Too hot

  )
  */ a buzzer will sound to give warning ADD 
  //LCD
  #include <Wire.h>
  #include <LCD.h>
  #include <LiquidCrystal_I2C.h>
  #define I2C_ADDR    0x27 // <<----- Add your address here.  Find it from I2C Scanner
  #define BACKLIGHT_PIN     3
  #define En_pin  2
  #define Rw_pin  1
  #define Rs_pin  0
  #define D4_pin  4
  #define D5_pin  5
  #define D6_pin  6
  #define D7_pin  7
  int n = 1;
  LiquidCrystal_I2C lcd(I2C_ADDR,En_pin,Rw_pin,Rs_pin,D4_pin,D5_pin,D6_pin,D7_pin);
  //Temperature sensor
  int tempPin = 0;        //the analog pin the TMP36's Vout (sense) pin is connected to a0
                          //the resolution is 10 mV / degree centigrade with a
                          //500 mV offset to allow for negative temperatures
  int SensorReading;        // the analog reading from the sensor
  int waitTime=100;     //Amount of time in mS to wait in between temperature readings
  //Led and buzzer
   int buzzer=8;//Connect the buzzer Pin to Digital Pin 8  
   int greenLed=9; //Connect green LED to Digital Pin 9
   int redLed=7; //Connect red LED to Digital Pin 11 
   int i=1;//for the welcome note

  void setup(void) {
  //LCD
  lcd.begin (16,2); //  <<----- My LCD was 16x2
  // Switch on the backlight
  lcd.setBacklightPin(BACKLIGHT_PIN,POSITIVE);
  lcd.setBacklight(HIGH);//LCD Backlight switch on 
  lcd.home (); // go home
  //Temperature sensor
  Serial.begin(9600);   // We'll send information via the Serial monitor
  //Led and buzzer
  pinMode(buzzer,OUTPUT);//Set Pin Mode as output
  pinMode(greenLed,OUTPUT);//Set ledPin as output 
  pinMode(redLed,OUTPUT);//Set ledPin as output
  

}
 
 
void loop(void) {
  //Welcome note
   if(i<2) {
   lcd.print("Welcome  to ");
   delay(1000);
   lcd.clear();
   lcd.print("Cofee Cool(CC) ");
   delay(1000);
   lcd.setCursor (0,1);
   lcd.print("By Brighto Paul");
   delay(4000);
   i=3;
 }
  SensorReading = analogRead(tempPin);  //Read from the temperature sensor 
  // now print out the temperature
  float tempC = (5.0 * SensorReading * 100.0) / 1024; //converting from 10 mv per degree with 500 mV offset for negavite temperatures.
  // Convert and output to Fahrenheight
  
  
  //float tempF = (tempC * 9.0 / 5.0) + 32.0;
    
    lcd.clear();//clear screen
    lcd.print("Temp:");
    lcd.setCursor (5,0);//cursor on thesecond line
    lcd.print(tempC);//print temperature in celsius
    lcd.print(" C");
    delay(1000);
  
  if((tempC>37.0)&&(tempC<41.99))
  {
    
    digitalWrite(redLed,HIGH); //Set red LED to high
    digitalWrite(greenLed,HIGH);//Set green LED to high
    lcd.setCursor (0,1);
    lcd.print("Have the Coffee");
    delay(400);
    }
  else if(tempC>=42.0){
    digitalWrite(greenLed,LOW);//Set green LED to Low
    digitalWrite(redLed,HIGH); //Set red LED to high
    delay(200);
    digitalWrite(buzzer,HIGH); //Start making a sound
    delay(100); //Wait 1ms
    //digitalWrite(redLed,LOW);
    digitalWrite(buzzer,LOW); //Stop making a sound
    digitalWrite(redLed,LOW);//Set red LED to Low
    lcd.setCursor (0,1);//set cursor 2nd line
    lcd.print("Coffee! too Hot");
    delay(150);
   }
  else {
    digitalWrite(redLed,LOW);//Set red LED to low
    digitalWrite(buzzer,LOW); //Stop making a sound
    digitalWrite(greenLed,HIGH); //Set green LED to high
    //delay(300); //Wait 1ms 
    //digitalWrite(greenLed,LOW);
    lcd.setCursor (0,1);
    lcd.print("Have it soon");
    delay(600); //Wait 1ms 
    }  
  
  //Note you can use Farenheit using the following code
  //float temperatureC = (5.0 * analogRead(tempPin) * 100.0) / 1024; 
  //Serial.print(tempC); Serial.println(" degrees C");
  //Serial.print(tempF); Serial.println(" degrees F");
 
  delay(waitTime); //Wait until it's time to loop again.
}
