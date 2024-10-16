-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2024 at 03:48 AM
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
('17', 'Ava', 'Scott', '412 789 123', 'ava.scott@example.com'),
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
  `phone_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `due_date` datetime NOT NULL,
  `last_checked` datetime NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `contractor_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `organisation_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `management_tool_link`, `due_date`, `last_checked`, `complete`, `contractor_id`, `organisation_id`) VALUES
('1', 'Alpha Initiative', 'First phase of the new system development', 'http://pmtool.example.com/alpha', '2024-10-15 00:00:00', '2024-09-01 00:00:00', 0, '7', '3'),
('10', 'Customer Feedback', 'Analyze customer feedback and make improvements', 'http://pmtool.example.com/feedback', '2024-10-25 00:00:00', '2024-09-27 00:00:00', 1, '11', '16'),
('11', 'Sales Dashboard', 'Create a new sales dashboard', 'http://pmtool.example.com/sales-dashboard', '2024-10-05 00:00:00', '2024-09-28 00:00:00', 0, '3', '19'),
('12', 'Product Launch', 'Launch the new product', 'http://pmtool.example.com/product-launch', '2024-11-10 00:00:00', '2024-09-30 00:00:00', 0, '2', '5'),
('13', 'User Experience', 'Improve user experience based on feedback', 'http://pmtool.example.com/ux-improvement', '2024-12-05 00:00:00', '2024-10-01 00:00:00', 0, '20', '9'),
('14', 'Tech Support', 'Enhance tech support services', 'http://pmtool.example.com/tech-support', '2024-10-15 00:00:00', '2024-10-02 00:00:00', 0, '13', '14'),
('15', 'Data Migration', 'Migrate historical data to new system', 'http://pmtool.example.com/data-migration', '2024-11-05 00:00:00', '2024-10-04 00:00:00', 0, '10', '18'),
('16', 'API Integration', 'Integrate new APIs', 'http://pmtool.example.com/api-integration', '2024-12-01 00:00:00', '2024-10-07 00:00:00', 0, '8', '20'),
('17', 'Client Onboarding', 'Onboard new clients', 'http://pmtool.example.com/client-onboarding', '2024-10-20 00:00:00', '2024-10-10 00:00:00', 1, '18', '15'),
('18', 'Performance Tuning', 'Tune application performance', 'http://pmtool.example.com/performance-tuning', '2024-11-20 00:00:00', '2024-10-12 00:00:00', 0, '4', '2'),
('19', 'Backup System', 'Implement new backup system', 'http://pmtool.example.com/backup-system', '2024-12-20 00:00:00', '2024-10-15 00:00:00', 0, '16', '6'),
('2', 'Beta Rollout', 'Second phase implementation', 'http://pmtool.example.com/beta', '2024-11-01 00:00:00', '2024-09-05 00:00:00', 0, '15', '6'),
('20', 'Compliance Check', 'Ensure compliance with new regulations', 'http://pmtool.example.com/compliance', '2024-10-25 00:00:00', '2024-10-17 00:00:00', 1, '17', '4'),
('21', 'Mobile App', 'Develop a mobile application', 'http://pmtool.example.com/mobile-app', '2024-11-30 00:00:00', '2024-10-20 00:00:00', 0, '22', '10'),
('22', 'Customer Portal', 'Build a new customer portal', 'http://pmtool.example.com/customer-portal', '2024-12-15 00:00:00', '2024-10-22 00:00:00', 0, '21', '7'),
('23', 'Internal Audit', 'Conduct an internal audit', 'http://pmtool.example.com/internal-audit', '2024-10-10 00:00:00', '2024-10-25 00:00:00', 1, '15', '11'),
('24', 'Website Redesign', 'Redesign the company website', 'http://pmtool.example.com/website-redesign', '2024-11-10 00:00:00', '2024-10-27 00:00:00', 0, '9', '12'),
('25', 'Vendor Management', 'Improve vendor management processes', 'http://pmtool.example.com/vendor-management', '2024-12-01 00:00:00', '2024-10-30 00:00:00', 0, '4', '13'),
('26', 'Staff Recruitment', 'Recruit new staff members', 'http://pmtool.example.com/staff-recruitment', '2024-10-15 00:00:00', '2024-11-01 00:00:00', 0, '6', '18'),
('27', 'Product Update', 'Update existing products', 'http://pmtool.example.com/product-update', '2024-11-20 00:00:00', '2024-11-03 00:00:00', 0, '13', '14'),
('28', 'Client Feedback', 'Collect and analyze client feedback', 'http://pmtool.example.com/client-feedback', '2024-12-10 00:00:00', '2024-11-05 00:00:00', 0, '11', '6'),
('29', 'Server Maintenance', 'Perform server maintenance', 'http://pmtool.example.com/server-maintenance', '2024-10-30 00:00:00', '2024-11-07 00:00:00', 1, '20', '9'),
('3', 'Client Migration', 'Migrate clients to the new platform', 'http://pmtool.example.com/migration', '2024-12-01 00:00:00', '2024-09-10 00:00:00', 0, '12', '2'),
('30', 'Software Upgrade', 'Upgrade the core software', 'http://pmtool.example.com/software-upgrade', '2024-11-15 00:00:00', '2024-11-10 00:00:00', 0, '7', '3'),
('31', 'HR System', 'Implement new HR system', 'http://pmtool.example.com/hr-system', '2024-12-01 00:00:00', '2024-11-12 00:00:00', 0, '15', '1'),
('32', 'Data Analysis', 'Analyze current data trends', 'http://pmtool.example.com/data-analysis', '2024-10-25 00:00:00', '2024-11-15 00:00:00', 1, '19', '8'),
('33', 'CRM Integration', 'Integrate with new CRM', 'http://pmtool.example.com/crm-integration', '2024-11-30 00:00:00', '2024-11-18 00:00:00', 0, '8', '13'),
('34', 'Event Planning', 'Plan and execute company events', 'http://pmtool.example.com/event-planning', '2024-12-10 00:00:00', '2024-11-20 00:00:00', 0, '14', '17'),
('35', 'Employee Wellness', 'Develop employee wellness programs', 'http://pmtool.example.com/wellness', '2024-10-15 00:00:00', '2024-11-22 00:00:00', 0, '2', '12'),
('36', 'Data Security', 'Enhance data security measures', 'http://pmtool.example.com/data-security', '2024-11-05 00:00:00', '2024-11-25 00:00:00', 1, '10', '4'),
('37', 'API Development', 'Develop new APIs', 'http://pmtool.example.com/api-development', '2024-12-15 00:00:00', '2024-11-27 00:00:00', 0, '16', '7'),
('38', 'Client Support', 'Improve client support services', 'http://pmtool.example.com/client-support', '2024-10-20 00:00:00', '2024-12-01 00:00:00', 0, '21', '18'),
('39', 'Training Materials', 'Create training materials', 'http://pmtool.example.com/training-materials', '2024-11-10 00:00:00', '2024-12-05 00:00:00', 1, '6', '16'),
('4', 'Data Analytics', 'Develop data analytics tools', 'http://pmtool.example.com/analytics', '2024-10-30 00:00:00', '2024-09-12 00:00:00', 1, '5', '1'),
('40', 'Employee Onboarding', 'Improve employee onboarding process', 'http://pmtool.example.com/employee-onboarding', '2024-12-01 00:00:00', '2024-12-07 00:00:00', 0, '12', '2'),
('41', 'IT Infrastructure', 'Upgrade IT infrastructure', 'http://pmtool.example.com/it-infrastructure', '2024-10-15 00:00:00', '2024-12-10 00:00:00', 0, '13', '5'),
('42', 'Customer Support', 'Enhance customer support capabilities', 'http://pmtool.example.com/customer-support', '2024-11-25 00:00:00', '2024-12-12 00:00:00', 1, '17', '10'),
('43', 'Product Documentation', 'Update product documentation', 'http://pmtool.example.com/product-docs', '2024-12-10 00:00:00', '2024-12-15 00:00:00', 0, '9', '12'),
('44', 'Vendor Integration', 'Integrate with new vendors', 'http://pmtool.example.com/vendor-integration', '2024-10-20 00:00:00', '2024-12-18 00:00:00', 0, '14', '19'),
('45', 'Compliance Training', 'Provide compliance training', 'http://pmtool.example.com/compliance-training', '2024-11-15 00:00:00', '2024-12-20 00:00:00', 0, '20', '6'),
('46', 'Website Maintenance', 'Perform website maintenance', 'http://pmtool.example.com/website-maintenance', '2024-12-01 00:00:00', '2024-12-22 00:00:00', 1, '11', '13'),
('47', 'Marketing Campaign', 'Execute new marketing campaign', 'http://pmtool.example.com/marketing-campaign', '2024-10-30 00:00:00', '2024-12-25 00:00:00', 0, '15', '2'),
('48', 'Client Retention', 'Develop client retention strategies', 'http://pmtool.example.com/client-retention', '2024-11-05 00:00:00', '2024-12-27 00:00:00', 0, '18', '9'),
('49', 'Technology Assessment', 'Assess new technology trends', 'http://pmtool.example.com/technology-assessment', '2024-12-15 00:00:00', '2024-12-30 00:00:00', 0, '5', '16'),
('5', 'Employee Training', 'Training for new system users', 'http://pmtool.example.com/training', '2024-11-15 00:00:00', '2024-09-15 00:00:00', 0, '19', '8'),
('50', 'Strategic Planning', 'Plan for the next fiscal year', 'http://pmtool.example.com/strategic-planning', '2024-10-25 00:00:00', '2024-12-31 00:00:00', 1, '2', '11'),
('6', 'Feature Update', 'Update key features in the application', 'http://pmtool.example.com/feature-update', '2024-12-15 00:00:00', '2024-09-18 00:00:00', 0, '9', '4'),
('7', 'Security Audit', 'Conduct a security audit', 'http://pmtool.example.com/security', '2024-10-20 00:00:00', '2024-09-20 00:00:00', 1, '1', '12'),
('8', 'Infrastructure Upgrade', 'Upgrade server infrastructure', 'http://pmtool.example.com/infrastructure', '2024-11-30 00:00:00', '2024-09-22 00:00:00', 0, '14', '7'),
('9', 'Market Research', 'Research for new market opportunities', 'http://pmtool.example.com/market-research', '2024-12-10 00:00:00', '2024-09-25 00:00:00', 0, '6', '11');

-- --------------------------------------------------------

--
-- Table structure for table `projects_skills`
--

CREATE TABLE `projects_skills` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `project_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `skill_id` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
