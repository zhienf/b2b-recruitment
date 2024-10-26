-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2024 at 02:02 PM
-- Server version: 9.0.1
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit2104_assignment05`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`id`, `first_name`, `last_name`, `phone_number`, `email`) VALUES
('1', 'John', 'Doe', '412 345 678', 'john.doe@example.com'),
('10', 'William', 'Clark', '412 901 567', 'william.clark@example.com'),
('11', 'Jessica', 'Lewis', '412 123 456', 'jessica.lewis@example.com'),
('12', 'Brian', 'Walker', '412 234 678', 'brian.walker@example.com'),
('13', 'Olivia', 'Hall', '412 345 789', 'olivia.hall@example.com'),
('14', 'James', 'Allen', '412 456 890', 'james.allen@example.com'),
('15', 'Isabella', 'Young', '412 567 901', 'isabella.young@example.com'),
('16', 'Daniel', 'Wright', '412 678 012', 'daniel.wright@example.com'),
('18', 'Matthew', 'Adams', '412 890 234', 'matthew.adams@example.com'),
('19', 'Sophie', 'Nelson', '412 901 345', 'sophie.nelson@example.com'),
('2', 'Jane', 'Smith', '412 678 901', 'jane.smith@example.com'),
('20', 'Andrew', 'Carter', '412 123 567', 'andrew.carter@example.com'),
('21', 'Chloe', 'Mitchell', '412 234 678', 'chloe.mitchell@example.com'),
('22', 'Ethan', 'Roberts', '412 345 789', 'ethan.roberts@example.com'),
('23', 'Mia', 'Turner', '412 456 890', 'mia.turner@example.com'),
('24', 'Lucas', 'Phillips', '412 567 901', 'lucas.phillips@example.com'),
('25', 'Emma', 'Campbell', '412 678 012', 'emma.campbell@example.com'),
('26', 'Alexander', 'Parker', '412 789 123', 'alexander.parker@example.com'),
('27', 'Lily', 'Evans', '412 890 234', 'lily.evans@example.com'),
('28', 'Jacob', 'Edwards', '412 901 345', 'jacob.edwards@example.com'),
('29', 'Charlotte', 'Collins', '412 123 456', 'charlotte.collins@example.com'),
('3', 'Michael', 'Brown', '412 234 567', 'michael.brown@example.com'),
('30', 'Ryan', 'Stewart', '412 234 567', 'ryan.stewart@example.com'),
('31', 'Amelia', 'Morris', '412 345 678', 'amelia.morris@example.com'),
('32', 'Aiden', 'Rogers', '412 456 789', 'aiden.rogers@example.com'),
('33', 'Grace', 'Reed', '412 567 890', 'grace.reed@example.com'),
('34', 'Noah', 'Cook', '412 678 901', 'noah.cook@example.com'),
('35', 'Mia', 'Bell', '412 789 012', 'mia.bell@example.com'),
('36', 'Jack', 'Murphy', '412 890 123', 'jack.murphy@example.com'),
('37', 'Ella', 'Bailey', '412 901 234', 'ella.bailey@example.com'),
('38', 'Lucas', 'Rivera', '412 123 345', 'lucas.rivera@example.com'),
('39', 'Harper', 'Cooper', '412 234 456', 'harper.cooper@example.com'),
('4', 'Emily', 'Davis', '412 987 654', 'emily.davis@example.com'),
('40', 'Benjamin', 'Richardson', '412 345 567', 'benjamin.richardson@example.com'),
('41', 'Lily', 'Wood', '412 456 678', 'lily.wood@example.com'),
('42', 'Mason', 'Cox', '412 567 789', 'mason.cox@example.com'),
('43', 'Aria', 'Ward', '412 678 890', 'aria.ward@example.com'),
('44', 'James', 'Foster', '412 789 901', 'james.foster@example.com'),
('45', 'Zoe', 'James', '412 890 012', 'zoe.james@example.com'),
('46', 'Elijah', 'Bennett', '412 901 123', 'elijah.bennett@example.com'),
('47', 'Scarlett', 'Gray', '412 123 234', 'scarlett.gray@example.com'),
('48', 'Matthew', 'Simmons', '412 234 345', 'matthew.simmons@example.com'),
('49', 'Evelyn', 'Hayes', '412 345 456', 'evelyn.hayes@example.com'),
('5', 'Sarah', 'Wilson', '412 345 987', 'sarah.wilson@example.com'),
('50', 'Jack', 'Brooks', '412 456 567', 'jack.brooks@example.com'),
('6', 'David', 'Johnson', '412 567 890', 'david.johnson@example.com'),
('7', 'Laura', 'Martinez', '412 678 234', 'laura.martinez@example.com'),
('8', 'Robert', 'Lee', '412 789 345', 'robert.lee@example.com'),
('9', 'Michelle', 'Harris', '412 890 456', 'michelle.harris@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `contractors_skills`
--

CREATE TABLE `contractors_skills` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `contractor_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `skill_id` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contractors_skills`
--

INSERT INTO `contractors_skills` (`id`, `contractor_id`, `skill_id`) VALUES
('40cb29f7-644b-4d04-8088-99e5873f54d8', '1', 'b45d4986-09a5-4381-8274-416b7a62f112'),
('ba1ba143-fccf-4723-ace7-2b6dcae07b92', '10', 'b45d4986-09a5-4381-8274-416b7a62f112'),
('f48b683f-64bf-47fc-a27c-df8c34a34d8a', '11', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('754a8359-f55d-486b-9d00-e28ef7729c4b', '11', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5'),
('f90a6cce-d59b-4b8a-8611-53f8a45af5a9', '12', '017f1abd-7279-493c-b4f8-2dd00b9e8b0e'),
('50c04753-272b-412d-9870-d2ffffc17ab7', '12', '71fc5e08-dddb-4425-a59b-35e98e62d4af'),
('2a21bc57-d851-4d17-add3-7e308a4d331f', '13', 'a4e0fb87-cb33-4737-bbec-de8d1473d51f'),
('3c195f1a-c287-4b9e-9435-4e3812628de1', '14', 'a4e0fb87-cb33-4737-bbec-de8d1473d51f'),
('52fdd468-1369-49a8-b8a5-2ad11c990d54', '15', 'f6a4f74d-93e4-481c-9d67-5293bdb13ce0'),
('48ea3b01-79de-4d00-ac01-697cf4e9bec7', '16', '50812eaf-1294-45c9-b509-475060b7d6db'),
('66801da9-ad14-4e3d-8f6e-1e357e68a0c4', '16', 'e526c508-3342-4ed7-aaf6-d5e6fab74d29'),
('b51b970d-dd50-4308-8747-05da66fb7638', '18', '99dae9c8-7528-4cc7-80ea-ac87cc4b564d'),
('42dedaaf-de37-42be-8881-70151b2f5340', '18', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5'),
('1bd84801-dd96-4d6e-a4df-9d10fd474a9b', '19', '017f1abd-7279-493c-b4f8-2dd00b9e8b0e'),
('57a7f75b-f71d-4027-ac96-39ae51c642e2', '19', '71fc5e08-dddb-4425-a59b-35e98e62d4af'),
('0745dc96-f3e6-4362-9167-99714e16f43f', '2', '4e22066e-be6e-42a3-8bbe-6aae56ec845f'),
('a083f261-95fa-4751-a86f-8a9d0ec39a55', '2', 'd80c4607-23d1-4a6f-b00a-f8189650d547'),
('bce0c1c3-28ce-40e1-88e0-56a17b8a4eb8', '2', 'f6a4f74d-93e4-481c-9d67-5293bdb13ce0'),
('d7c1ba6f-4e5c-4c9e-8611-37af4c1b00fe', '20', '4e22066e-be6e-42a3-8bbe-6aae56ec845f'),
('f180d0f5-36c9-4592-b696-d2a0b892d396', '20', 'd80c4607-23d1-4a6f-b00a-f8189650d547'),
('2cb3b179-322d-4941-a9ac-992032b6385f', '20', 'f6a4f74d-93e4-481c-9d67-5293bdb13ce0'),
('b33de56a-6075-4674-8fe6-5faef2ab58a3', '21', '50812eaf-1294-45c9-b509-475060b7d6db'),
('d33bf4b2-3b0b-49c2-bdb0-13fd933eeaf7', '21', 'e526c508-3342-4ed7-aaf6-d5e6fab74d29'),
('6ab124a9-e449-4b6d-8b52-0f414755fdf4', '22', '63e7b89e-5bd4-4bda-992c-ccd10ba896d2'),
('619130be-8e72-4b1e-8ad7-063f0e4ed44a', '22', '9ba744e7-9c36-4555-a973-00164d52054d'),
('39f6efe8-d76c-408e-b070-b4ab141e9d68', '23', '3d66c84f-722f-4bb6-9338-87d0516fed1b'),
('97561ef3-a6d5-43aa-a67e-b6bc02333166', '23', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('1e93b019-c0f9-4923-b224-d004f96c5c4e', '24', '63e7b89e-5bd4-4bda-992c-ccd10ba896d2'),
('15788595-cd19-4d65-b608-f12e571fac4c', '25', '50812eaf-1294-45c9-b509-475060b7d6db'),
('1b85b50b-d335-435f-8c48-e37cc7c55933', '25', '99dae9c8-7528-4cc7-80ea-ac87cc4b564d'),
('e845b44c-5961-4068-8807-b50483b1560f', '26', '894b28a9-efc3-49e4-977c-14f8cce4ee65'),
('8244f89a-3f15-4476-9d76-b694e3a688a8', '26', 'b45d4986-09a5-4381-8274-416b7a62f112'),
('120d067e-84a9-4ca9-b2f3-483681f895ee', '27', '9ba744e7-9c36-4555-a973-00164d52054d'),
('1950c55e-aff3-4766-817a-3d2c35241d30', '28', '80272b77-92c9-4af3-a076-2455b3a6ab21'),
('ad019a20-9584-4590-ba21-cc71069da168', '28', '99dae9c8-7528-4cc7-80ea-ac87cc4b564d'),
('eef1e005-c71e-400b-b4cd-18dd1be6a668', '29', 'd80c4607-23d1-4a6f-b00a-f8189650d547'),
('e9b73635-26f8-4132-bd15-c9fe3f472ef2', '3', '3d66c84f-722f-4bb6-9338-87d0516fed1b'),
('c5590614-00cd-4821-a3bd-290dcb156607', '30', '50812eaf-1294-45c9-b509-475060b7d6db'),
('358d7735-c948-41ab-84a1-e7796aa7c013', '31', '398011b1-8059-4a11-b1fe-1c97c6bb2ff5'),
('c24b604f-17e6-4eec-87f5-426e0200e2a7', '31', '99dae9c8-7528-4cc7-80ea-ac87cc4b564d'),
('80267794-b091-4ff3-a0df-33d581719f10', '32', '6df05a36-1e1c-4704-9f0e-787e06a0ecc0'),
('2ce5592f-6ede-45b4-9e62-5fcd974a6440', '32', 'cfc30521-c8ba-48d1-9d44-708a55efb123'),
('c8e92d6b-718a-4c8b-9d0e-f4699e685a9b', '33', 'd80c4607-23d1-4a6f-b00a-f8189650d547'),
('5e1ca9c0-a44a-4fae-b156-2f88c8aedd99', '33', 'e526c508-3342-4ed7-aaf6-d5e6fab74d29'),
('4d0021b5-f6c7-4c50-ae89-e10ef68d4e6b', '33', 'f6a4f74d-93e4-481c-9d67-5293bdb13ce0'),
('e7c95446-22cc-4326-b708-4f488f9a6baa', '34', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('bfb84448-89b6-4b65-9a87-7832f5ca67d7', '34', 'ef7a1c53-8ee4-47cb-97c8-ce94ca5c86b9'),
('77bb6555-db3a-4504-8e96-82bd6f08494b', '35', '63e7b89e-5bd4-4bda-992c-ccd10ba896d2'),
('f2b032fb-8deb-4d33-a562-dad5ffd2c027', '36', '017f1abd-7279-493c-b4f8-2dd00b9e8b0e'),
('3466b28d-b39c-49cd-8b2a-931eea4bbc1c', '36', '71fc5e08-dddb-4425-a59b-35e98e62d4af'),
('d7ff841e-f50f-44e7-9732-409a42cd7cb0', '37', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('98361faf-9cec-419b-be54-88380071485d', '38', '50812eaf-1294-45c9-b509-475060b7d6db'),
('0a156a7a-9ea6-4c22-9f47-adb8fcbc38fe', '39', '4e22066e-be6e-42a3-8bbe-6aae56ec845f'),
('222454b0-9e91-48b9-b4f8-4d0b574d2300', '4', '9e266d06-81a1-4598-852d-afac9ca92d2d'),
('63c6dd03-7766-4dd1-a909-49279cb8b46a', '40', 'd80c4607-23d1-4a6f-b00a-f8189650d547'),
('3481926e-791d-4bda-a537-74002088bc23', '41', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5'),
('f267aae7-ca6d-4271-bbef-4fee1b4aeda0', '42', '9ba744e7-9c36-4555-a973-00164d52054d'),
('2eabf7c7-a0db-46ec-8be4-021919b3add2', '43', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('fa60dc4b-73f3-43b6-af1d-baaae310f333', '43', 'ef7a1c53-8ee4-47cb-97c8-ce94ca5c86b9'),
('bcc7aa60-bd28-4c3f-a5c3-a2dcf6656e37', '44', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5'),
('4a1ff3e6-9e6b-4cfa-a2ad-ff74e3e43dca', '45', '50812eaf-1294-45c9-b509-475060b7d6db'),
('b1159cdb-1aaf-4b62-860e-601659951b26', '45', 'e526c508-3342-4ed7-aaf6-d5e6fab74d29'),
('7a246630-0fc5-441d-8a83-b7dedd81068f', '46', '894b28a9-efc3-49e4-977c-14f8cce4ee65'),
('18dd84cf-049e-47a1-9d7c-1c29be85cae6', '46', '9ba744e7-9c36-4555-a973-00164d52054d'),
('05e67601-46e7-4ee9-8272-ced1250068ca', '47', '3d66c84f-722f-4bb6-9338-87d0516fed1b'),
('80cab1cf-1aeb-4f85-b363-079b0ad5dae5', '47', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('7ba2f5e3-2b66-4fcf-94b4-873c8cd5f565', '48', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('1ef0cc0f-5cda-454f-ac5b-b12f68abf8bf', '48', 'ef7a1c53-8ee4-47cb-97c8-ce94ca5c86b9'),
('13c77b97-a85b-4288-b788-2323c33f1ccf', '49', '3d66c84f-722f-4bb6-9338-87d0516fed1b'),
('4c7cd80b-801b-4d24-a6b0-752840cdfac7', '49', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('49778fad-519f-4a53-bc3d-fea60e9b4631', '5', 'b45d4986-09a5-4381-8274-416b7a62f112'),
('5e914211-e201-471e-aac9-432bbb524868', '5', 'e526c508-3342-4ed7-aaf6-d5e6fab74d29'),
('3ede5e96-cf2d-4f23-a3c1-6c848fbc76aa', '50', '3d66c84f-722f-4bb6-9338-87d0516fed1b'),
('086fedd2-f5a0-4f6a-a0fb-cf2e49276b2d', '50', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5'),
('dbe2606f-1923-4c42-a2da-c8f51ab05792', '6', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5'),
('45a43be2-707c-46cb-8cdf-6decb403563e', '7', '50812eaf-1294-45c9-b509-475060b7d6db'),
('81ebbdb0-1b64-4b70-bb68-3d455e585f42', '8', '6df05a36-1e1c-4704-9f0e-787e06a0ecc0'),
('9c75df0d-8b4f-437b-8f21-bb0a64f47886', '9', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `organisation_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contractor_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `replied` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `organisation_id`, `contractor_id`, `first_name`, `last_name`, `email`, `phone_number`, `message`, `replied`) VALUES
('1', '11', '1', 'Alice', 'Johnson', 'alice.johnson@email.com', '412 345 678', 'I\'m interested in your services.', 1),
('2', '1', NULL, 'Bob', 'Smith', 'bob.smith@email.com', '400 123 456', 'Can I get more information on pricing?', 0),
('3', '15', '16', 'Charlie', 'Brown', 'charlie.brown@email.com', '433 987 654', 'I\'d like to schedule a consultation.', 0),
('4', NULL, NULL, 'David', 'Anderson', 'david.anderson@email.com', '421 765 432', 'Please send me the product brochure.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `organisations`
--

CREATE TABLE `organisations` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `current_website` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `industry` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `business_name`, `contact_first_name`, `contact_last_name`, `contact_email`, `current_website`, `industry`) VALUES
('1', 'Tech Innovators', 'John', 'Smith', 'john.smith@techinnovators.com', 'http://techinnovators.com', 'Technology'),
('10', 'Creative Minds', 'Jessica', 'Adams', 'jessica.adams@creativeminds.com', 'http://creativeminds.com', 'Marketing'),
('11', 'Secure IT', 'Brian', 'Mitchell', 'brian.mitchell@secureit.com', 'http://secureit.com', 'IT Security'),
('12', 'Global Trade', 'Olivia', 'Roberts', 'olivia.roberts@globaltrade.com', 'http://globaltrade.com', 'Logistics'),
('13', 'Elite Partners', 'James', 'Turner', 'james.turner@elitepartners.com', 'http://elitepartners.com', 'Partnerships'),
('14', 'Innovate Health', 'Isabella', 'Scott', 'isabella.scott@innovatehealth.com', 'http://innovatehealth.com', 'Healthcare'),
('15', 'NextGen Tech', 'Daniel', 'Carter', 'daniel.carter@nextgentech.com', 'http://nextgentech.com', 'Technology'),
('16', 'Bright Future', 'Ava', 'Wright', 'ava.wright@brightfuture.com', 'http://brightfuture.com', 'Education'),
('17', 'Green Earth', 'Mia', 'Young', 'mia.young@greenearth.com', 'http://greenearth.com', 'Environmental'),
('18', 'Finance Experts', 'Matthew', 'King', 'matthew.king@financeexperts.com', 'http://financeexperts.com', 'Finance'),
('19', 'Tech Pioneers', 'Sophie', 'Evans', 'sophie.evans@techpioneers.com', 'http://techpioneers.com', 'Technology'),
('2', 'Green Solutions', 'Emily', 'Johnson', 'emily.johnson@greensolutions.com', 'http://greensolutions.com', 'Environmental'),
('20', 'HealthFirst', 'Andrew', 'Green', 'andrew.green@healthfirst.com', 'http://healthfirst.com', 'Healthcare'),
('21', 'Market Leaders', 'Chloe', 'Hall', 'chloe.hall@marketleaders.com', 'http://marketleaders.com', 'Marketing'),
('22', 'Visionary Designs', 'Ethan', 'Adams', 'ethan.adams@visionarydesigns.com', 'http://visionarydesigns.com', 'Design'),
('23', 'Auto Vision', 'Lily', 'Mitchell', 'lily.mitchell@autovision.com', 'http://autovision.com', 'Automotive'),
('24', 'Urban Tech', 'Jacob', 'Bennett', 'jacob.bennett@urbantech.com', 'http://urbantech.com', 'Technology'),
('25', 'Pro Health', 'Charlotte', 'Collins', 'charlotte.collins@prohealth.com', 'http://prohealth.com', 'Healthcare'),
('26', 'Innovative Solutions', 'Ryan', 'Wood', 'ryan.wood@innovativesolutions.com', 'http://innovativesolutions.com', 'Consulting'),
('27', 'NextGen Designs', 'Amelia', 'Stewart', 'amelia.stewart@nextgendesigns.com', 'http://nextgendesigns.com', 'Design'),
('28', 'Smart Living', 'Lucas', 'Young', 'lucas.young@smartliving.com', 'http://smartliving.com', 'Real Estate'),
('29', 'Elite Tech', 'Emma', 'Rogers', 'emma.rogers@elitetech.com', 'http://elitetech.com', 'Technology'),
('3', 'Future Enterprises', 'Michael', 'Brown', 'michael.brown@futureenterprises.com', 'http://futureenterprises.com', 'Consulting'),
('30', 'Global Solutions', 'Alexander', 'Price', 'alexander.price@globalsolutions.com', 'http://globalsolutions.com', 'Logistics'),
('31', 'FinTech Partners', 'Grace', 'Cooper', 'grace.cooper@fintechpartners.com', 'http://fintechpartners.com', 'Finance'),
('32', 'Tech Advance', 'Noah', 'Walker', 'noah.walker@techadvance.com', 'http://techadvance.com', 'Technology'),
('33', 'Creative Tech', 'Harper', 'James', 'harper.james@creativetech.com', 'http://creativetech.com', 'Design'),
('34', 'Health Innovators', 'James', 'Harris', 'james.harris@healthinnovators.com', 'http://healthinnovators.com', 'Healthcare'),
('35', 'Tech Savvy', 'Ella', 'Nelson', 'ella.nelson@techsavvy.com', 'http://techsavvy.com', 'Technology'),
('36', 'Smart Solutions', 'Zoe', 'Clark', 'zoe.clark@smartsolutions.com', 'http://smartsolutions.com', 'Consulting'),
('37', 'Future Health', 'Elijah', 'Scott', 'elijah.scott@futurehealth.com', 'http://futurehealth.com', 'Healthcare'),
('38', 'Finance Future', 'Scarlett', 'Green', 'scarlett.green@financefuture.com', 'http://financefuture.com', 'Finance'),
('39', 'Urban Innovators', 'Matthew', 'Lee', 'matthew.lee@urbaninnovators.com', 'http://urbaninnovators.com', 'Real Estate'),
('4', 'Health Hub', 'Sarah', 'Wilson', 'sarah.wilson@healthhub.com', 'http://healthhub.com', 'Healthcare'),
('40', 'Tech Experts', 'Evelyn', 'Walker', 'evelyn.walker@techexperts.com', 'http://techexperts.com', 'Technology'),
('41', 'Global Ventures', 'Jack', 'Martinez', 'jack.martinez@globalventures.com', 'http://globalventures.com', 'Logistics'),
('42', 'Elite Finance', 'Emily', 'Roberts', 'emily.roberts@elitefinance.com', 'http://elitefinance.com', 'Finance'),
('43', 'Health Solutions', 'Benjamin', 'Adams', 'benjamin.adams@healthsolutions.com', 'http://healthsolutions.com', 'Healthcare'),
('44', 'Innovative Designs', 'Lily', 'Smith', 'lily.smith@innovative-designs.com', 'http://innovative-designs.com', 'Design'),
('45', 'Auto Experts', 'Mason', 'Brown', 'mason.brown@autoexperts.com', 'http://autoexperts.com', 'Automotive'),
('46', 'Tech Innovators', 'Aria', 'Green', 'aria.green@techinnovators.com', 'http://techinnovators.com', 'Technology'),
('47', 'NextGen Solutions', 'James', 'Wright', 'james.wright@nextgensolutions.com', 'http://nextgensolutions.com', 'Consulting'),
('48', 'Smart Health', 'Lily', 'Young', 'lily.young@smarthealth.com', 'http://smarthealth.com', 'Healthcare'),
('49', 'Finance Innovators', 'Jack', 'Evans', 'jack.evans@financeinnovators.com', 'http://financeinnovators.com', 'Finance'),
('5', 'FinServe Group', 'David', 'Clark', 'david.clark@finservegroup.com', 'http://finservegroup.com', 'Finance'),
('50', 'Urban Future', 'Grace', 'Baker', 'grace.baker@urbanfuture.com', 'http://urbanfuture.com', 'Real Estate'),
('6', 'Smart Design', 'Laura', 'Martinez', 'laura.martinez@smartdesign.com', 'http://smartdesign.com', 'Design'),
('67c7009b-7e02-4032-b1c5-d57b73ea7e31', 'Parcel Pro', 'Jessie', 'Wills', 'jessie@gmail.com', 'https://parcelpro.com', 'Logistics'),
('7', 'Auto Solutions', 'Robert', 'Lee', 'robert.lee@autosolutions.com', 'http://autosolutions.com', 'Automotive'),
('8', 'Urban Living', 'Michelle', 'Harris', 'michelle.harris@urbanliving.com', 'http://urbanliving.com', 'Real Estate'),
('9', 'Code Wizards', 'William', 'Walker', 'william.walker@codewizards.com', 'http://codewizards.com', 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `management_tool_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `due_date` date NOT NULL,
  `last_checked` date NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `contractor_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `organisation_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `management_tool_link`, `due_date`, `last_checked`, `complete`, `contractor_id`, `organisation_id`) VALUES
('1', 'Alpha Initiative', 'First phase of the new system development', 'http://pmtool.example.com/alpha', '2024-10-15', '2024-09-01', 0, NULL, '1'),
('10', 'Customer Feedback', 'Analyze customer feedback and make improvements', 'http://pmtool.example.com/feedback', '2024-10-25', '2024-09-27', 1, '11', '16'),
('11', 'Sales Dashboard', 'Create a new sales dashboard', 'http://pmtool.example.com/sales-dashboard', '2024-10-05', '2024-09-28', 0, '3', '19'),
('12', 'Product Launch', 'Launch the new product', 'http://pmtool.example.com/product-launch', '2024-11-10', '2024-09-30', 0, '2', '5'),
('13', 'User Experience', 'Improve user experience based on feedback', 'http://pmtool.example.com/ux-improvement', '2024-12-05', '2024-10-01', 0, '20', '9'),
('14', 'Tech Support', 'Enhance tech support services', 'http://pmtool.example.com/tech-support', '2024-10-15', '2024-10-02', 0, '13', '14'),
('15', 'Data Migration', 'Migrate historical data to new system', 'http://pmtool.example.com/data-migration', '2024-11-05', '2024-10-04', 0, '10', '18'),
('16', 'API Integration', 'Integrate new APIs', 'http://pmtool.example.com/api-integration', '2024-12-01', '2024-10-07', 0, '8', '20'),
('17', 'Client Onboarding', 'Onboard new clients', 'http://pmtool.example.com/client-onboarding', '2024-10-20', '2024-10-10', 1, '18', '15'),
('18', 'Performance Tuning', 'Tune application performance', 'http://pmtool.example.com/performance-tuning', '2024-11-20', '2024-10-12', 0, '4', '2'),
('19', 'Backup System', 'Implement new backup system', 'http://pmtool.example.com/backup-system', '2024-12-20', '2024-10-15', 0, '16', '6'),
('2', 'Beta Rollout', 'Second phase implementation', 'http://pmtool.example.com/beta', '2024-11-01', '2024-09-05', 0, '15', '6'),
('21', 'Mobile App', 'Develop a mobile application', 'http://pmtool.example.com/mobile-app', '2024-11-30', '2024-10-20', 0, '22', '10'),
('22', 'Customer Portal', 'Build a new customer portal', 'http://pmtool.example.com/customer-portal', '2024-12-15', '2024-10-22', 0, '21', '7'),
('23', 'Internal Audit', 'Conduct an internal audit', 'http://pmtool.example.com/internal-audit', '2024-10-10', '2024-10-25', 1, '15', '11'),
('24', 'Website Redesign', 'Redesign the company website', 'http://pmtool.example.com/website-redesign', '2024-11-10', '2024-10-27', 0, '9', '12'),
('25', 'Vendor Management', 'Improve vendor management processes', 'http://pmtool.example.com/vendor-management', '2024-12-01', '2024-10-30', 0, '4', '13'),
('26', 'Staff Recruitment', 'Recruit new staff members', 'http://pmtool.example.com/staff-recruitment', '2024-10-15', '2024-11-01', 0, '6', '18'),
('27', 'Product Update', 'Update existing products', 'http://pmtool.example.com/product-update', '2024-11-20', '2024-11-03', 0, '13', '14'),
('28', 'Client Feedback', 'Collect and analyze client feedback', 'http://pmtool.example.com/client-feedback', '2024-12-10', '2024-11-05', 0, '11', '6'),
('29', 'Server Maintenance', 'Perform server maintenance', 'http://pmtool.example.com/server-maintenance', '2024-10-30', '2024-11-07', 1, '20', '9'),
('3', 'Client Migration', 'Migrate clients to the new platform', 'http://pmtool.example.com/migration', '2024-12-01', '2024-09-10', 0, '12', '2'),
('30', 'Software Upgrade', 'Upgrade the core software', 'http://pmtool.example.com/software-upgrade', '2024-11-15', '2024-11-10', 0, '7', '3'),
('31', 'HR System', 'Implement new HR system', 'http://pmtool.example.com/hr-system', '2024-12-01', '2024-11-12', 0, '15', '1'),
('32', 'Data Analysis', 'Analyze current data trends', 'http://pmtool.example.com/data-analysis', '2024-10-25', '2024-11-15', 1, '19', '8'),
('33', 'CRM Integration', 'Integrate with new CRM', 'http://pmtool.example.com/crm-integration', '2024-11-30', '2024-11-18', 0, '8', '13'),
('34', 'Event Planning', 'Plan and execute company events', 'http://pmtool.example.com/event-planning', '2024-12-10', '2024-11-20', 0, '14', '17'),
('35', 'Employee Wellness', 'Develop employee wellness programs', 'http://pmtool.example.com/wellness', '2024-10-15', '2024-11-22', 0, '2', '12'),
('36', 'Data Security', 'Enhance data security measures', 'http://pmtool.example.com/data-security', '2024-11-05', '2024-11-25', 1, '10', '4'),
('37', 'API Development', 'Develop new APIs', 'http://pmtool.example.com/api-development', '2024-12-15', '2024-11-27', 0, '16', '7'),
('38', 'Client Support', 'Improve client support services', 'http://pmtool.example.com/client-support', '2024-10-20', '2024-12-01', 0, '21', '18'),
('39', 'Training Materials', 'Create training materials', 'http://pmtool.example.com/training-materials', '2024-11-10', '2024-12-05', 1, '6', '16'),
('4', 'Data Analytics', 'Develop data analytics tools', 'http://pmtool.example.com/analytics', '2024-10-30', '2024-09-12', 1, '5', '1'),
('40', 'Employee Onboarding', 'Improve employee onboarding process', 'http://pmtool.example.com/employee-onboarding', '2024-12-01', '2024-12-07', 0, '12', '2'),
('41', 'IT Infrastructure', 'Upgrade IT infrastructure', 'http://pmtool.example.com/it-infrastructure', '2024-10-15', '2024-12-10', 0, '13', '5'),
('43', 'Product Documentation', 'Update product documentation', 'http://pmtool.example.com/product-docs', '2024-12-10', '2024-12-15', 0, '9', '12'),
('44', 'Vendor Integration', 'Integrate with new vendors', 'http://pmtool.example.com/vendor-integration', '2024-10-20', '2024-12-18', 0, '14', '19'),
('45', 'Compliance Training', 'Provide compliance training', 'http://pmtool.example.com/compliance-training', '2024-11-15', '2024-12-20', 0, '20', '6'),
('46', 'Website Maintenance', 'Perform website maintenance', 'http://pmtool.example.com/website-maintenance', '2024-12-01', '2024-12-22', 1, '11', '13'),
('47', 'Marketing Campaign', 'Execute new marketing campaign', 'http://pmtool.example.com/marketing-campaign', '2024-10-30', '2024-12-25', 0, '15', '2'),
('48', 'Client Retention', 'Develop client retention strategies', 'http://pmtool.example.com/client-retention', '2024-11-05', '2024-12-27', 0, '18', '9'),
('49', 'Technology Assessment', 'Assess new technology trends', 'http://pmtool.example.com/technology-assessment', '2024-12-15', '2024-12-30', 0, '5', '16'),
('5', 'Employee Training', 'Training for new system users', 'http://pmtool.example.com/training', '2024-11-15', '2024-09-15', 0, '19', '8'),
('50', 'Strategic Planning', 'Plan for the next fiscal year', 'http://pmtool.example.com/strategic-planning', '2024-10-25', '2024-12-31', 1, '2', '11'),
('6', 'Feature Update', 'Update key features in the application', 'http://pmtool.example.com/feature-update', '2024-12-15', '2024-09-18', 0, '9', '4'),
('7', 'Security Audit', 'Conduct a security audit', 'http://pmtool.example.com/security', '2024-10-20', '2024-09-20', 1, '1', '12'),
('8', 'Infrastructure Upgrade', 'Upgrade server infrastructure', 'http://pmtool.example.com/infrastructure', '2024-11-30', '2024-09-22', 0, '14', '7'),
('9', 'Market Research', 'Research for new market opportunities', 'http://pmtool.example.com/market-research', '2024-12-10', '2024-09-25', 0, '6', '11');

-- --------------------------------------------------------

--
-- Table structure for table `projects_skills`
--

CREATE TABLE `projects_skills` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `project_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `skill_id` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects_skills`
--

INSERT INTO `projects_skills` (`id`, `project_id`, `skill_id`) VALUES
('e28a8ca9-2410-4919-8011-8408142c0988', '1', 'f6a4f74d-93e4-481c-9d67-5293bdb13ce0'),
('c9e13192-696f-44c1-bd14-5e63bfc787d9', '10', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('46e72777-769a-455f-815c-51d6909ed0f9', '11', '3d66c84f-722f-4bb6-9338-87d0516fed1b'),
('64ccab78-f8a0-45e1-b156-f31688e05987', '12', 'd80c4607-23d1-4a6f-b00a-f8189650d547'),
('a8d889d6-048f-498c-8056-33957ad79264', '17', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('e114e400-153f-4c47-bb20-437e6594edd9', '24', 'c7d87671-a592-4a8b-a5af-cf748bca7ca3'),
('53fdd58f-b20c-44a7-8075-35bb207f85ca', '24', 'edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
('017f1abd-7279-493c-b4f8-2dd00b9e8b0e', 'MySQL'),
('398011b1-8059-4a11-b1fe-1c97c6bb2ff5', 'Microsoft Azure'),
('3d66c84f-722f-4bb6-9338-87d0516fed1b', 'DevOps'),
('4e22066e-be6e-42a3-8bbe-6aae56ec845f', 'HTML'),
('50812eaf-1294-45c9-b509-475060b7d6db', 'C#'),
('63e7b89e-5bd4-4bda-992c-ccd10ba896d2', 'Go'),
('6df05a36-1e1c-4704-9f0e-787e06a0ecc0', 'Kotlin (Android)'),
('71fc5e08-dddb-4425-a59b-35e98e62d4af', 'MongoDB'),
('80272b77-92c9-4af3-a076-2455b3a6ab21', 'Google Cloud Platform'),
('894b28a9-efc3-49e4-977c-14f8cce4ee65', 'OpenCV'),
('99dae9c8-7528-4cc7-80ea-ac87cc4b564d', 'Amazon Web Services'),
('9ba744e7-9c36-4555-a973-00164d52054d', 'RESTful Services'),
('9e266d06-81a1-4598-852d-afac9ca92d2d', 'PHP'),
('a4e0fb87-cb33-4737-bbec-de8d1473d51f', 'Swift (iOS)'),
('b45d4986-09a5-4381-8274-416b7a62f112', 'Python'),
('c7d87671-a592-4a8b-a5af-cf748bca7ca3', 'Firewall Configuration'),
('cfc30521-c8ba-48d1-9d44-708a55efb123', 'Java'),
('d80c4607-23d1-4a6f-b00a-f8189650d547', 'CSS'),
('e526c508-3342-4ed7-aaf6-d5e6fab74d29', 'C'),
('edfe1e34-ee3a-4812-9cdd-8c1350d9a3b5', 'Cloud Security'),
('ef7a1c53-8ee4-47cb-97c8-ce94ca5c86b9', 'Network Configuration'),
('f6a4f74d-93e4-481c-9d67-5293bdb13ce0', 'Javascript');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(96) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
('83df61de-b903-41f8-a6f2-de122130a533', 'Nathan', 'Jims', 'nathan.jims@gmail.com', '$2y$10$Dub0vuEATStR6/1jhFrFA.9qnFQ9tsI/GW3TCiYNd2/ZHf7xkntie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractors_skills`
--
ALTER TABLE `contractors_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contractor_id` (`contractor_id`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisation_id` (`organisation_id`,`contractor_id`),
  ADD KEY `contractor_id` (`contractor_id`);

--
-- Indexes for table `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisation_id` (`organisation_id`,`contractor_id`),
  ADD KEY `contractor_id` (`contractor_id`);

--
-- Indexes for table `projects_skills`
--
ALTER TABLE `projects_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contractors_skills`
--
ALTER TABLE `contractors_skills`
  ADD CONSTRAINT `contractors_skills_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contractors_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD CONSTRAINT `enquiries_ibfk_1` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enquiries_ibfk_2` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`organisation_id`) REFERENCES `organisations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects_skills`
--
ALTER TABLE `projects_skills`
  ADD CONSTRAINT `projects_skills_ibfk_1` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projects_skills_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
