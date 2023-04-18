-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 09:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `photo` text NOT NULL,
  `Description` longtext NOT NULL,
  `Price` int(11) NOT NULL,
  `Rent` tinyint(1) NOT NULL,
  `Video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Id`, `Name`, `photo`, `Description`, `Price`, `Rent`, `Video`) VALUES
(1, 'alfa romio', 'https://media.ed.edmunds-media.com/alfa-romeo/giulia/2022/oem/2022_alfa-romeo_giulia_sedan_quadrifoglio_fq_oem_1_1600.jpg', 'Do you yearn to drive something different? Most small luxury sedans these days can seem pretty cookie-cutter. Enter the 2022 Alfa Romeo Giulia, a small luxury sedan with distinctive styling, athletic reflexes and an interior that feels like a tailored suit for the driver. Compared to something like an Audi A4 or BMW 3 Series, the Alfa Romeo Giulia stands out in a crowd. Giulia sales are comparatively small too, furthering the car\'s exclusive vibe.\r\nThe base Giulia comes with a 280-horsepower turbocharged four-cylinder engine and is fun and lively to drive. And if you want to take that special feeling to the next level, there\'s the top-of-the-line Quadrifoglio, with its 505-horsepower V6. The Giulia isn\'t without its faults — take a look at our Expert Rating to read our in-depth analysis — but its personality is a perfect antidote to small luxury sedan blandness.', 44000, 0, ''),
(2, 'mercedes benz g-class 2023', 'https://images.prismic.io/carwow/d7d113bc-6570-4db2-aa5c-0fbbecb43e90_2021+Mercedes+G-Class+front+quarter+moving+2.jpg', 'The Mercedes G-Class is a high-riding SUV that comes with a very luxurious interior and a range of powerful petrol and diesel engines. It might look a little old-fashioned, but it’s one of the most accomplished 4x4s on sale and a serious alternative to the likes of the Land Rover Defender and the Porsche Cayenne. Step inside, however, and you’ll have no clue that this is a car designed to climb mountains and ford rivers. It comes with an uber-luxurious cabin that’s filled to bursting with plush leather, brushed aluminium and a futuristic dual-screen infotainment system borrowed from the S-Class. Speaking of infotainment, the G-Class’ new system is more intuitive to use than ever and comes with satellite navigation, smartphone-mirroring for Apple and Android phones and a high-resolution digital driver’s display instead of conventional analogue dials. Top-spec G 63 models even get AMG-specific displays and plenty of sporty carbon-fibre trims on the dashboard and doors.', 130000, 0, ''),
(3, 'BMW X6', 'https://imgd-ct.aeplcdn.com/664x415/cw/ec/41375/BMW-New-X6-Exterior-164774.jpg?wm=0&q=75', 'Summary\r\n\r\nThe BMW X6 is available in two variants - xDrive40i xLine and xDrive40i M Sport. Both the variants of the Sports Activity Coupe (SAV) feature distinguished exterior and interior design cues that lend an individual personality to the vehicle. The xLine highlights the robustness of the new Sports Activity Coupe and the extrovert character enhancing the car’s off-road looks. The M Sport variant on the other hand brings a strikingly dynamic design angle that offers a commanding presence and distinguishes itself as an elite sports model. The vehicle is available in ten standard colour options, which include - riverside blue metallic, carbon black, Manhattan metallic, artic grey, mineral white, flamenco red brilliant effect, sophisto grey brilliant effect, black sapphire and alpine white.\r\n\r\n Engine\r\n\r\nThe BMW X6 is powered by a 3.0-litre, inline six-cylinder petrol engine that produces 335bhp and 450Nm of torque at 1,500 – 5,000 rpm. The engine comes mated to an eight-speed Steptronic Sport automatic transmission. The vehicle is capable of sprinting from 0-100kmph in just 5.5-seconds and can attain a top speed of 250kmph. The standard feature list includes steering wheel paddle shifters, cruise control with braking function and launch control function to offer better driving experience. The BMW xDrive system splits drive torque between the front and the rear wheels variably and as the situation demands with even greater precision and speed. The intelligent all-wheel drive maximises traction, agility and directional stability.\r\n\r\nExterior\r\n\r\nAs compared to its predecessor, the BMW X6 now gets a larger kidney grille design with optional illumination function. The new BMW X6 has grown in terms of length (26mm), width (15mm) and wheelbase (42mm). At the same time, the overall height has been reduced (6mm). The characteristic twin LED headlights come as standard and extend up to the traditional kidney grille. As for the rear, the powerful shoulder lines are further accentuated by wide L-shaped LED rear lights. The SAV rides on 20-inch alloy wheels.\r\n\r\n Interior\r\n\r\nThe BMW X6 gets a more driver focussed cockpit. The new model comes equipped with temperature-controlled cup holders (heated and cooled) and offers wireless charging as standard, to help the driver maintain focus. The leather Vernasca upholstery is available in six color tones as standard.  The vehicle gets panoramic glass roof along with electrically controlled (with memory function) front seats. The BMW X6 features BMW Live Cockpit Professional which includes a high resolution 12.3-inch central information display with iDrive Controller and Navigation with touch functionality, Hi-Fi Loudspeaker system and optional Harman Kardon Surround sound system. Moreover, the vehicle offers 580-litres of boot space.', 100000, 0, ''),
(4, 'Audi A4', 'https://media.ed.edmunds-media.com/audi/a4/2022/oem/2022_audi_a4_sedan_prestige-s-line_fq_oem_8_1280.jpg', 'How does the A4 drive? We tested the A4 with the 45 TFSI turbocharged four-cylinder engine, the one that makes 261 hp. This is more than the base 40 TFSI motor that makes 60 fewer ponies. Our test car leapt to 60 mph in 5.3 seconds, an unusually quick time for a four-cylinder engine in this class. The dual-clutch automatic transmission lacks the positive engagement of, say, the rival BMW 3 Series\' whip-smart conventional automatic, but you get used to its sometimes delayed responses. Overall, the A4 goes about its business smoothly and quietly.\r\n\r\nThe A4 has a firm brake pedal feel, but the abrupt pedal engagement at low speeds conspires with the dual-clutch transmission to make inching into a parking space a herky-jerky affair. At our test track for the emergency 60-0 mph brake test, the A4 stopped in a decent 111 feet. Our test car had the summer performance tires, however, so expect longer braking for the standard but less grippy all-season tires.\r\n\r\nThrough turns, the A4 feels wholly competent but not particularly engaging. The steering, in particular, is a letdown because it doesn\'t give you a good feel of the road or how much grip the car has. If you\'re looking for passion, you won\'t find it here, but composure and capability? Absolutely.', 500900, 0, ''),
(5, 'BMW i7', 'https://imgd-ct.aeplcdn.com/664x415/n/cw/ec/137875/i7-exterior-right-front-three-quarter.jpeg?isig=0&q=75', 'The new BMW i7, a Sedan from BMW, was launched in India in Jan 2023. i7 has received 100% rating score from our users.\r\n\r\nBMW i7 price starts from ₹ 1.95 Crore in India. i7 is available in 7 colours - Black Sapphire Metallic, Individual Dravit Grey Metallic, Individual Tanzanite Blue Metallic, Brooklyn Grey Metallic, Carbon Black Metallic, Mineral White Metallic, and Oxide Grey Metallic. i7 seating capacity is 5 People. i7 has received Not Tested star NCAP Rating safety rating.\r\n\r\ni7 is available in 1 versions and 1 fuel options - Electric.\r\n\r\ni7 competes with BMW 7 Series, Audi e-tron GT and Mercedes-Benz EQS in India.', 170000, 0, ''),
(6, 'Mercedes-Benz AMG GT', 'https://media.ed.edmunds-media.com/mercedes-benz/amg-gt/2019/oem/2019_mercedes-benz_amg-gt_sedan_63-s_fq_oem_1_1600.jpg', 'The Mercedes-Benz AMG GT has been one of our favorite sports cars since its debut in 2016. What could make it even better? Well, Mercedes seems to think an extra pair of doors. The new 2019 AMG GT 4-Door Coupe doesn\'t offer S-Class levels of luxury, however. Instead, it trades rear-seat accommodations for a far more engaging driving experience. Of the brand\'s sporty four-doors, this one is certainly the most performance-oriented.\r\n\r\nThe base model comes with Mercedes\' new turbocharged inline-six paired to a mild hybrid system. We like this powertrain in other Benzes, but it\'s safe to say that the 4.0-liter V8 that comes in the GT 63 is the one to get. Not only does it produce significantly more power than the inline-six, but choosing the V8 also adds mechanical upgrades that should make the sedan truly feel like a four-door sports car.\r\n\r\nAlong with the likes of the Porsche Panamera and the 2020 BMW 8 Series Gran Coupe, the new AMG GT 4-Door Coupe should serve you well if you\'re looking for an adrenaline-charged combination of luxury and performance.\r\n\r\nEdmunds\' Expert Rating\r\n7.2 / 10\r\nTrim tested\r\nEach vehicle typically comes in multiple versions that are fundamentally similar. The ratings in this review are based on our full test of the Mercedes-Benz AMG GT 53 Sedan (turbo 3.0L inline-6 | 9-speed automatic | AWD).\r\n', 68000, 0, ''),
(7, 'porsche 911', 'https://pics.porsche.com/rtt/iris?COSY-EU-100-1713c6eK12UC31P3T5JOCU%25hjdmiTDDmvMXlHWguCuq6Q44RtRHo9ZAaDjYu5P3I7tGW3rNbZJNKXv9Z7KcQQ%25yFN5tFAsXrw4r3wo0qnqZr8MCnR4i84tV2YN2OmNyW1QGWgCWKMUuyOBoV60KBiMWTQ4mgfNPoKyXv6tQ9%25ttefIjMREDrs6eWR6kUjGlHbnURRY40wjEwr1F69swJ5Rr7VjZarpo0yc', 'Fewer kilograms equals more agility and contact with the road is more important than ever. The 911 Carrera T is a commitment to purism. A conscious release for increased driving pleasure.', 45000, 0, ''),
(8, 'Tesla Roadster', 'https://cdn.motor1.com/images/mgl/G4z31/s3/tesla-roadster.jpg', 'The fact it has no grille cavity isn’t so obvious since the black area below the bumper line gives some sort of grille impression and may be taking in air but not for an ICE engine. The grille-less look of other Teslas always struck me as people wearing masks over their mouths (now a common sight).\r\nSide\r\nAlthough the indented side with a chiseled half running board is stolen from the Camaro, it does give the mass some interesting solidity. To have it just gradually bowing out would make it look too much like the Opel GT of decades ago. The air scoop behind the rear 3/4 window is stolen off the Lamnorghini Miura but nicely done.\r\n\r\nHaving a targa top gets rid of all that could go wrong with the retractable hardtops. Why the press keeps calling it a roadster is inexplicable other than lazy journalism. A roadster is a fully open car. it was never a roadster even in the Lotus-based version. A fixed rear roof structure supporting a hatchback means it’s a targa roofed coupe.\r\n\r\nThe vent in the front fenders imitates vents on numerous ICE cars, used to ventilate hot engine compartments. I’d like to know what they are venting (would hate to think there’s something phony on such a highly utilitarian design).\r\n\r\n*Above imagery by Wallace Wyss\r\n\r\nRear\r\nNice flush fitting-when-down retractable spoiler. Under-tray vertical fins suggest some attempt at controlling air flowing under the car but we won’t know if they are partially cosmetic until we see a bottom shot.\r\n\r\nItalian Connection\r\nThe performance of the roadster (targa coupe) is predicted to be of hypercar/supercar level, 250 mph, 0-to-60 mph in under 2 seconds, which achievement-wise pits it against some of the most expensive Ferraris (even the SF90 Stradale only does a pitiful 175 mph...). But there are still those supercar lovers who yearn for the aura imbued by a car being Italian-styled, so a wise move would be to set up a small satellite studio in Italy to do a re-styling, and have those models carry an Italian badge, named after some plush resort area in Italy like Carrozzeria Lago d\'Como. \r\n\r\nSummary\r\nNice design by their chief designer. One that won’t grow old, no matter how much longer we have to wait for a production model. I would even like to see the bottom vertical under-tray fins underplayed more and the top spoiler made wider as long as it still hides flush deck when not needed.\r\n\r\nI doubt the front spoiler is deployable but if it isn’t, they might consider it since they are talking Ferrari-like speeds. Bad stuff can happen if you have a nose lift above 150 mph (as Ford found out at LeMans in ’64m forcing them to fabricate hasty mash-up front spoilers in the pits).\r\n\r\n', 200000, 0, ''),
(9, 'Rolls-Royce Phantom', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/2019_Rolls-Royce_Phantom_V12_Automatic_6.75.jpg/1200px-2019_Rolls-Royce_Phantom_V12_Automatic_6.75.jpg', 'The Phantom was unveiled by livestream on 27 July 2017.[9]\r\n\r\nIt made its public debut at a special exhibition Rolls-Royce held in London two days later on 29 July. The event, dubbed \"The Great Eight Phantoms\", took place at Bonhams auction house in Mayfair. The exhibition gathered a noteworthy Phantom from each generation, from Fred Astaire\'s Phantom I to subsequent models driven by royalty, or made famous by celebrities, including John Lennon\'s Romany gypsy wagon-style painted Phantom V.[9][10]\r\nThe Phantom VIII\'s styling has been described as an evolution of the Phantom VII\'s as it bears most of the design features of its predecessor.[11][12][13]\r\n\r\nLike its predecessor, the Phantom VIII has a short front overhang and upright front end, a long bonnet and set-back passenger compartment as well as a long wheelbase and a flowing rear end.[11] It also uses rear-opening \"coach doors\". For the first time on a Phantom, Rolls-Royce\'s trademark \"Parthenon\" radiator grille is integrated into the surrounding bodywork.[14]\r\n\r\nThe Phantom is available in two wheelbase lengths.', 460000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(256) NOT NULL,
  `UserName` varchar(256) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(256) NOT NULL,
  `BirthDay` date NOT NULL,
  `Gender` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `UserName`, `Email`, `Password`, `BirthDay`, `Gender`) VALUES
('kareem', 'test', 'test@gmail.com', '123', '2023-04-07', 'male'),
('kareem', 'test1', 'test1@g.com', '123', '2023-04-07', 'male'),
('admin', 'k123', 'k@g.com', '123', '2023-04-10', 'male'),
('kimo', 'k1', 'k@g.com', '123', '2023-04-10', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
