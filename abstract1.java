/*
Abstraction is a process of hiding the implementation details and showing only functionality to the user.

A class that is declared with abstract keyword and  may contain abstract and non-abstract functions.
i.e. for sending sms u required mob no. u don't knw mess delivery ways and process. also camera flash, backlight, frontlight

A abstract method does'nt have any body just like pure virtual function in c++.

Note : abstract class can not instantiate. and abstract class contain atleast one abstract function. when you having abstract function in a abstract class you can not define over there you need to take another class called concret class to redefine the abstract functions. if you failed to refine abstract method in next class that also consider as abstract class. 
*/

/*abstract*/ class mobile
{
/*abstract*/ void camera()
{}
public void flash()
{
System.out.println("Flashlight use for camera as torch");
}
}
class newmobile extends mobile
{
/*public void camera()
{
System.out.println("There are 2 cameras in mobile front and back");
}
*/
public static void main(String args[])
{
mobile ob=new newmobile();
ob.camera();
ob.flash();
}
}