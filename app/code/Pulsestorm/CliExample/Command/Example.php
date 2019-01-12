<?php
namespace Pulsestorm\CliExample\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Example extends Command
{
    protected $deploymentConfigFactory;

    public function __construct(
        \Magento\Framework\App\DeploymentConfigFactory $configFactory
    )
    {
        $this->deploymentConfigFactory = $configFactory;
        return parent::__construct();
    }

    protected function configure()
    {
        $this->setName("ps:example");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World");
    }
}
