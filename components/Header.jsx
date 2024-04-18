import React, { useCallback, useEffect, useState } from "react";

import {
  StyleSheet,
  View,
  SafeAreaView,
  StatusBar,
  Text,
  TextInput,
  TouchableOpacity,
  Alert,
  ActivityIndicator,
  Image,
} from "react-native";

import {
  Entypo,
  AntDesign,
  FontAwesome5,
  FontAwesome,
  SimpleLineIcons,
  Ionicons,
} from "@expo/vector-icons";

// Définition du composant enfant
export default function Header({ navigation, route }) {
  return (
    <View
      style={{
        width: "100%",
        height: 50,
        flexDirection: "row",
        justifyContent: "space-between",
        alignItems: "center",
      }}
    >
      <TouchableOpacity onPress={() => navigation.navigate("login")}>
        <SimpleLineIcons name="logout" size={20} color="white" />
      </TouchableOpacity>

      <View style={{ flexDirection: "row", alignItems: "center" }}>
        <TouchableOpacity
          style={{ marginRight: 15 }}
          onPress={() => navigation.navigate("compte")}
        >
          <Ionicons name="notifications" size={24} color="white" />
        </TouchableOpacity>

        <TouchableOpacity onPress={() => navigation.navigate("compte")}>
          <Image
            style={{
              resizeMode: "cover",
              height: 30,
              width: 30,
              borderRadius: 50,
            }}
            source={require("../assets/public/willyam.jpg")}
          />
        </TouchableOpacity>
      </View>
    </View>
  );
};
