
<?php
namespace Cataholic;

class Cat
{
	private $firstname;
	private $age;
	private $color;
	private $sex;
	private $race;
	
	public function getFirstname()
	{
	    return $this->firstname;
	}
	
	protected function getAge()
	{
	    return $this->age;
	}
	
	public function getColor()
	{
	    return $this->color;
	}
	
	public function getSex()
	{
	    return $this->sex;
	}
	
	public function getRace()
	{
	    return $this->race;
	}
	
	// setFunction to change firstname of cat
	public function setFirstname(string $newFirstname)
	{
	    if (strlen($newFirstname) <= 3 && strlen($newFirstname) >=20) {
	        $this->firstname = $newFirstname;
	        return $this;
	    }else{
	        echo "Choose a name between 3 to 20 Characters"
	            throw new Exception();
	    }
	}
	
	//setFunction to set the age of the cat
	public function setAge(INT $newAge)
	{
	    $this->age = $newAge;
	    return $this;
	}
	
	//setFunction to set the color of the cat
	public function setColor(string $newColor)
	{
	    if (strlen($newColor) <= 3 && strlen($newColor) >=10) {
	        $this->color = $newColor;
	        return $this;
	    }else{
	        echo "Your input needs to be between 3 to 10 characters long"
	            throw new Exception();
	    }
	}
	
	//setFunction to set the race of the cat
	public function setRace(string $newRace)
	{
	    if (strlen($newRace) <= 3 && strlen($newRace) >=20) {
	        $this->race = $newRace;
	        return $this;
	    }else{
	        echo "Your input needs to be between 3 to 20 characters long"
	            throw new Exception();
	    }
	}
	
	public function setSex($newsex)
	{
	    // If the new cat is a female or male, then update the model
	    if (in_array($newSex, ['Male', 'Female'])) {
	        $this->sex = $newSex;
	    } else {
	        // Else throw an exception
	        throw new Exception();
	    }
	    
	    return $this;
	}
	

}



$james = new Cat();
$james->setFirstname('James')->setAge(2)->setColour('Brown')->setSex('Male')->setRace('Siamois');

$kitty = new Cat();
$kitty->setFirstname('Kitty')->setAge(3)->setColour('White-Black')->setSex('Female')->setRace('Bengal');

$marquise = new Cat();
$marquise->setFirstname('Marquise')->setAge(14)->setColour('Grey')->setSex('Female')->setRace('Bengal');
