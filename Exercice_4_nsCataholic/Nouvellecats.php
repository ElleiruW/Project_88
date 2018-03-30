
<?php 


namespace Cataholic;


use Cataholic/Cats;

class NouvelleCat extends Cat{
	
	public function getInfo()
	{
		return [
			'firstname' => $this->firstname,
			'age' => $this->age,
			'color' => $this->color,
			'sex' => $this->sex,
			'race' => $this->race,
		];
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
$diva = new NouvelleCat();
$diva->setFirstname('Diva')->setAge(2)->setColour('Brown')->setSex('Female')->setRace('Siamois');

$maxi = new NouvelleCat();
$maxi->setFirstname('Maxi')->setAge(3)->setColour('Grey')->setSex('Male')->setRace('Bengal');


$minouch = new NouvelleCat();
$minouch->setFirstname('Minouch')->setAge(14)->setColour('Grey')->setSex('Female')->setRace('Bengal');

$chicki = new NouvelleCat();


