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

const url = "https://balezi-group.net/blive/admins/assets/avatar/";
const avatar_cover = "https://balezi-group.net/blive/admins/assets/images/user.png";
// Définition du composant enfant
export default function Header({ navigation, route, user }) {
  return (
    <View
      style={{
        width: "100%",
        height: 50,
        flexDirection: "row",
        justifyContent: "space-between",
        alignItems: "center",
        paddingTop: 15,
        paddingBottom: 15,
        backgroundColor: "#f29304",
        paddingHorizontal: 15,
      }}
    >
      <Image
        style={{
          resizeMode: "contain",
          height: 45,
          width: 60,
        }}
        source={require("../assets/public/logo-blanc.png")}
      />

      <View style={{ flexDirection: "row", alignItems: "center" }}>
        <TouchableOpacity
          style={{ marginRight: 20 }}
          onPress={() => navigation.navigate("login")}
        >
          <SimpleLineIcons name="logout" size={20} color="white" />
        </TouchableOpacity>

        {user == null ? (
          <TouchableOpacity onPress={() => navigation.navigate("compte")}>
            <Image
              style={{
                resizeMode: "contain",
                height: 30,
                width: 30,
                borderRadius: 50,
              }}
              source={require("../assets/public/user.png")}
            />
          </TouchableOpacity>
        ) : (
          <TouchableOpacity onPress={() => navigation.navigate("compte")}>
            <Image
              style={{
                resizeMode: "cover",
                height: 30,
                width: 30,
                borderRadius: 50,
              }}
              source={{ uri: url + "" + user }}
            />
          </TouchableOpacity>
        )}
      </View>
    </View>
  );
}
