
interface TransportInterface 
{
  public function Drive();
  public function Ability();

}

 
abstract class Transport implements TransportInterface
{
    public function Drive()
    {
        echo $this->phrase;
    }
    
    public function Ability()
    {
        echo $this->ability;
    }

    public function Sound()
    {
        echo $this->signal;
    }

    public function Wash()
    {
        echo $this->wipers;
    }
}


class Car extends Transport 
{
    protected $phrase = 'Wooom';
    protected $ability = 'Oxide Nitro';
    protected $signal = 'Beep Bepp';
    protected $wipers = 'Wipers is working';

    public function nitrousOxide ()
    {
        $this->Ability();
    }

    public function Signal ()
    {
        $this->Sound();
    }

}

class Bulldozer extends Transport
{
    protected $phrase = 'Brrrr';
    protected $ability = 'Control Bucket';
    protected $signal = 'Beep Bepp';
    protected $wipers = 'Wipers is working';

    public function bucketControl()
    {
        $this->Ability();
    }

    public function Signal ()
    {
        $this->Sound();
    }
}


class Tank extends Transport
{
    protected $phrase = 'Boom ';
    protected $ability = 'Shoot missile';
    protected $signal = 'Beep Bepp';
    protected $wipers = 'Wipers is working';

    public function shoot()
    {
        $this->Ability();
    }
    public function Signal ()
    {
        $this->Sound();
    }
}

function testTransport(TransportInterface $Transport) {
  $Transport->Drive();
  $Transport->Ability();
  $Transport->Signal();
  $Transport->Wash();
}
$Mercedez = new Car();
$Abrams = new Tank();

testTransport( $Abrams);