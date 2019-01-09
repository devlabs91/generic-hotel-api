<?php 

namespace Devlabs91\GenericHotelApi\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Style\SymfonyStyle;

use Devlabs91\GenericHotelApi\Services\CodeBuilderService;

class CodeBuilderCommand extends Command {
	
	protected function configure() {
		$this->setName('generichotelapi:codebuilder')->setDescription('Generic Hotel Api Codebuilder');
	}

	protected function execute(InputInterface $input, OutputInterface $output) {
		$io = new SymfonyStyle($input, $output);
		$io->title('Generic Hotel Api Codebuilder');

		CodeBuilderService::create();
		
		$output->writeln('<ok>done.</>');
	}
	
}
