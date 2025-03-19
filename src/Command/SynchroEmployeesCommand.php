<?php

namespace App\Command;

use App\Service\EmployeeService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class SynchroEmployeesCommand extends Command
{
    protected static $defaultName = 'app:synchro-employees';
    protected static $defaultDescription = 'Add a short description for your command';

    /**
     * @var EmployeeService
     */
    private $employeeService;

    public function __construct(
        EmployeeService $employeeService,
        string $name = null)
    {
        parent::__construct($name);
        $this->employeeService = $employeeService;
    }

    protected function configure(): void
    {
        $this
            ->setDescription(self::$defaultDescription)
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $employees = $this->employeeService->synchroEmployees();
        dd($employees);
        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
