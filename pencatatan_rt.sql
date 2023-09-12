/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : pencatatan_rt

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 12/09/2023 16:06:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for iuran
-- ----------------------------
DROP TABLE IF EXISTS `iuran`;
CREATE TABLE `iuran`  (
  `id_iuran` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `iuran_wajib` int NULL DEFAULT NULL,
  `agustusan` int NULL DEFAULT NULL,
  `sosial_besuk` int NULL DEFAULT NULL,
  `arisan` int NULL DEFAULT NULL,
  `bulan` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_iuran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of iuran
-- ----------------------------
INSERT INTO `iuran` VALUES (1, 'Agung Supriyadi', 8, 120000, 40000, 40000, 80000, '2023-09', '');
INSERT INTO `iuran` VALUES (2, 'Al-Amin', 2, 30000, 10000, 10000, 20000, '2023-09', '');
INSERT INTO `iuran` VALUES (3, 'Andre Purhananto', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (4, 'Andri Kurniawan Pamungkas', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (5, 'Anton Junaidi', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (6, 'Arif Tri Hijriyanto', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (7, 'Aris Wirawan', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (8, 'Bambang Suwandi', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (9, 'Bayu Budi Utomo (p Hartono)', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (10, 'Catur Nugroho', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (11, 'Dwi Ari Prasetyo (Gelek)', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (12, 'Dwi Candra Kisworo', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (13, 'Eko Adiyani', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (14, 'Eko Suharyono', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (15, 'Eko Suprayitno', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (16, 'Enjasega Pramudya', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (17, 'Fuad Ardani Rahman', 5, 75000, 25000, 25000, 50000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (18, 'Gillipa Lorenzo Alfredo', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (19, 'Gunaris DP', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (20, 'Indra Kurniawan', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (21, 'Joko Pramono', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (22, 'JP Didit', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (23, 'Kliyat', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (24, 'Kustejo', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (25, 'Makrup', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (26, 'Masruri', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (27, 'Mike Kumara', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (28, 'Muhammad sugiono', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (29, 'Mustakim Ulin Nuha', 4, 60000, 20000, 20000, 40000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (30, 'Pambudi Aditya Wijaya (p. sartono)', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (31, 'Petrus Hartono', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (32, 'Purnama', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (33, 'Ragil', 2, 30000, 10000, 10000, 20000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (34, 'Santoso', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (35, 'Sartono', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (36, 'Sigit Waluyo', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (37, 'Slamet Widodo', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (38, 'Solikhin', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (39, 'Sugiyanto', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (40, 'Suharno', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (41, 'Sukari', 1, 15000, 5000, 5000, 20000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (42, 'Sumantri', 3, 45000, 15000, 15000, 30000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (43, 'Sunardi', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (44, 'Sunardi Modhot', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (45, 'Supomo', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (46, 'Sutrisno', 2, 30000, 10000, 10000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (47, 'Teguh Tri M', 3, 45000, 15000, 15000, 30000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (48, 'Untung Sugiarto', 2, 30000, 10000, 10000, 20000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (49, 'Vicky Nur Prabowo', 2, 30000, 10000, 10000, 20000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (50, 'Wahyudi (Putra P. Sutrisno)', 2, 30000, 10000, 10000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (51, 'Wargianto', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (52, 'Warmin', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (53, 'Yuddy Yulianto', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (54, 'Reza Diki Aditya (p Harno)', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);
INSERT INTO `iuran` VALUES (55, 'Budi Winoto (Titis)', 1, 15000, 5000, 5000, 10000, '2023-09', NULL);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `category_id` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for menu_category
-- ----------------------------
DROP TABLE IF EXISTS `menu_category`;
CREATE TABLE `menu_category`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_category
-- ----------------------------

-- ----------------------------
-- Table structure for menu_submenu
-- ----------------------------
DROP TABLE IF EXISTS `menu_submenu`;
CREATE TABLE `menu_submenu`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `menu_id` int NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_submenu
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2022-10-15-084321', 'App\\Database\\Migrations\\CreateUser', 'default', 'App', 1694479189, 1);
INSERT INTO `migrations` VALUES (2, '2022-10-15-104220', 'App\\Database\\Migrations\\UserRole', 'default', 'App', 1694479189, 1);
INSERT INTO `migrations` VALUES (3, '2022-10-15-104229', 'App\\Database\\Migrations\\UserMenu', 'default', 'App', 1694479190, 1);
INSERT INTO `migrations` VALUES (4, '2022-10-15-104234', 'App\\Database\\Migrations\\UserMenuCategory', 'default', 'App', 1694479190, 1);
INSERT INTO `migrations` VALUES (5, '2022-10-15-104243', 'App\\Database\\Migrations\\UserMenuAccess', 'default', 'App', 1694479190, 1);
INSERT INTO `migrations` VALUES (6, '2022-10-15-111107', 'App\\Database\\Migrations\\UserSubMenu', 'default', 'App', 1694479190, 1);
INSERT INTO `migrations` VALUES (7, '2022-10-15-123432', 'App\\Database\\Migrations\\CreateCiSessionsTable', 'default', 'App', 1694479191, 1);

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(128) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `timestamp`(`timestamp` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('13e7ouks0nbigc41gmfdv2s4h04ffl3p', '::1', '2023-09-12 10:23:41', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438393032313B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('1r9se5671dotgvkme0osceng36s6efu9', '::1', '2023-09-12 07:59:30', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438303337303B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('3qk95efp5ae4tt23sjjn7hos6ppaofse', '::1', '2023-09-12 12:56:59', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439383231393B5F63695F70726576696F75735F75726C7C733A35343A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F3F6B6579776F72643D616D696E223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('7cbpc4ihjfsf7jb5jeq9hevc6iqt7q98', '::1', '2023-09-12 13:08:51', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439383933313B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('80mo7gmg51gt6ls7jcrkhu0018ocsbt3', '::1', '2023-09-12 11:30:47', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439333034373B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('9tc52puah9268vau2pmieuiqhffe7mvu', '::1', '2023-09-12 13:02:03', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439383532333B5F63695F70726576696F75735F75726C7C733A35343A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F3F6B6579776F72643D616D696E223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('9v7bfhrj5gnh5s9plcmi2c1ftk2jcq86', '::1', '2023-09-12 12:51:48', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439373930383B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('b4u7730m2recoqct70l54u0e2pi67hq7', '::1', '2023-09-12 10:31:45', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438393530353B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('cac60s5joe46iuu8rf5445o0iqej7cs4', '::1', '2023-09-12 13:14:49', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439393238393B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('cjausp83ghu3roi5ns10k4hp25dsomdl', '::1', '2023-09-12 08:45:41', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438333134313B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('e2faf9e4i4ghg578451620upcc4pju7j', '::1', '2023-09-12 13:20:42', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439393634323B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('e5evvs8fieaa38g8r5jbkj7cmdp5kmel', '::1', '2023-09-12 11:16:01', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439323136313B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('f8buhqi4s3ge82m2qsmqsef9q5ihr98k', '::1', '2023-09-12 08:29:25', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438323136353B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('gktppi70ko2e46bgdi7dup82srl8o55o', '::1', '2023-09-12 08:50:57', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438333435373B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('gn30ag0kbm9fisag43sesp5reg8147ce', '::1', '2023-09-12 13:27:55', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439393935353B5F63695F70726576696F75735F75726C7C733A35343A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F3F6B6579776F72643D616D696E223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('hn30ua8kkui3ce51ouoehqfio6qp2i85', '::1', '2023-09-12 13:25:55', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439393935353B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('jeab60m04v5rc5r6qjdqtj1hvge1vj0c', '::1', '2023-09-12 08:12:40', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438313136303B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('k16qk337eockid5vo2hsu0r0ilk9kjbs', '::1', '2023-09-12 08:34:41', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438323438313B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('l21lku6s3arlt8vgclhfmdq4h5gdd7rf', '::1', '2023-09-12 07:47:38', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343437393635383B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('l65prk54qpvoiuqu8i904mmsph2a9f3m', '::1', '2023-09-12 10:18:22', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438383730323B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('lqufu57tder6s7pibkdq18q4ioaj4b8c', '::1', '2023-09-12 08:18:45', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438313532353B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('o65qtbcv6fkq23tdbfldakrb2om8v2jn', '::1', '2023-09-12 11:23:11', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343439323539313B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);
INSERT INTO `sessions` VALUES ('os7sc19hetirpdbkio8k7jfbl6q6sn55', '::1', '2023-09-12 07:52:49', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343437393936393B5F63695F70726576696F75735F75726C7C733A34313A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F223B);
INSERT INTO `sessions` VALUES ('rt5aj97f2nl9luhvts5hrfvin7rim3er', '::1', '2023-09-12 10:10:59', 0x5F5F63695F6C6173745F726567656E65726174657C693A313639343438383235393B5F63695F70726576696F75735F75726C7C733A35303A22687474703A2F2F6C6F63616C686F73742F70656E6361746174616E2D72742F696E6465782E7068702F64617368626F617264223B757365725F69647C733A313A2231223B66756C6C6E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E4061646D696E2E636F6D223B757365726E616D657C733A353A2261646D696E223B726F6C655F69647C733A313A2231223B69734C6F67696E7C623A313B);

-- ----------------------------
-- Table structure for user_menu_access
-- ----------------------------
DROP TABLE IF EXISTS `user_menu_access`;
CREATE TABLE `user_menu_access`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_category_id` int NOT NULL DEFAULT 0,
  `category_id` int NOT NULL DEFAULT 0,
  `sub_category_id` int NOT NULL DEFAULT 0,
  `permit` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_menu_access
-- ----------------------------

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 'Admin', '2023-09-11 07:40:02', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `avatar` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  `role_id` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin@admin.com', 'admin', '$2y$10$3t9OzZ4oghrMCf.IL81nQ.HqikEO96SeRGgT1wYKlrXr0KFYGeKb2', NULL, 1, '2023-09-11 07:39:58', NULL);

SET FOREIGN_KEY_CHECKS = 1;
